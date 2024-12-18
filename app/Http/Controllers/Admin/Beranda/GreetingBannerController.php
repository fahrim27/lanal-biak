<?php

namespace App\Http\Controllers\Admin\Beranda;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Beranda\GreetingBanner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class GreetingBannerController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = GreetingBanner::all();
        $viewData['title'] = 'Banner Ucapan atau Peringatan';

        return view('admin.beranda.banner.index')->with('viewData', $viewData);
    }

    public function create()
    {

    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'title'       =>  'required',
            'image'       =>  'required',
        );

        $messages = array(
                'title.required' => 'Maaf, Judul tidak boleh dikosongi.',
                'image.required' => 'Maaf, Foto/ Gambar tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }

        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/beranda/banner/',$nama_file);
            $input['image'] = $nama_file;
        }

        GreetingBanner::create([
            'title' => $input['title'],
            'image' => $input['image'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Banner Ucapan atau Peringatan Added Succefully.')->success();
        return redirect()->route('admin.beranda.banner.index');
    }

    public function edit(string $id)
    {   

    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'title'       =>  'required',        );

        $messages = array(
                'title.required' => 'Maaf, Judul tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        if ($request->hasFile('image2')) {
            $data = GreetingBanner::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/beranda/banner/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['title', 'image', 'userid']));
        } else {
            GreetingBanner::where('id', $id)->update($request->only(['title', 'userid']));
        }

        flash('Success! Banner Ucapan atau Peringatan Updated Succefully.')->success();
        return redirect()->route('admin.beranda.banner.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = GreetingBanner::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Banner Ucapan atau Peringatan Deleted Succefully.')->success();
        return redirect()->route('admin.beranda.banner.index');
    }
}
