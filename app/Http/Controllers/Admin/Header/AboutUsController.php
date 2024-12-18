<?php

namespace App\Http\Controllers\Admin\Header;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Header\AboutUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class AboutUsController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = AboutUs::all();
        $viewData['title'] = 'Tentang Satuan';

        return view('admin.header.aboutus.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData['title'] = 'Add Tentang Satuan';

        return view('admin.header.aboutus.create')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'title'       =>  'required',
            'image'       =>  'required',
            'description' =>  'required',
        );

        $messages = array(
                'title.required' => 'Maaf, Judul tidak boleh dikosongi.',
                'image.required' => 'Maaf, Foto/ Gambar tidak boleh dikosongi.',
                'description.required' => 'Maaf, Deskripsi tidak boleh dikosongi.',
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

            $file->storeAs('public/images/header/aboutus/',$nama_file);
            $input['image'] = $nama_file;
        }

        AboutUs::create([
            'title' => $input['title'],
            'description' => $input['description'],
            'image' => $input['image'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Tentang Satuan Added Succefully.')->success();
        return redirect()->route('admin.header.aboutus.index');
    }

    public function edit(string $id): View
    {   
        $viewData['data'] = AboutUs::findOrFail($id);
        $viewData['title'] = 'Edit Tentang Satuan';

        return view('admin.header.aboutus.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'title'       =>  'required',
            'description' =>  'required',
        );

        $messages = array(
                'title.required' => 'Maaf, Judul tidak boleh dikosongi.',
                'description.required' => 'Maaf, Deskripsi tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        if ($request->hasFile('image2')) {
            $data = AboutUs::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/header/aboutus/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['title', 'description', 'image', 'userid']));
        } else {
            AboutUs::where('id', $id)->update($request->only(['title', 'description', 'userid']));
        }

        flash('Success! Tentang Satuan Updated Succefully.')->success();
        return redirect()->route('admin.header.aboutus.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = AboutUs::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Tentang Satuan Deleted Succefully.')->success();
        return redirect()->route('admin.header.aboutus.index');
    }
}
