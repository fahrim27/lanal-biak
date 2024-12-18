<?php

namespace App\Http\Controllers\Admin\Beranda;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Beranda\HomeSlider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class HomeSliderController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = HomeSlider::all();
        $viewData['title'] = 'Beranda/ Home Sliders';

        return view('admin.beranda.home-slider.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData['title'] = 'Add Beranda/ Home Sliders Data';

        return view('admin.beranda.home-slider.create')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'title'       =>  'required',
            'image'       =>  'required',
        );

        $messages = array(
                'title.required' => 'Maaf, Judul Slider tidak boleh dikosongi.',
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

            $file->storeAs('public/images/beranda/sliders/',$nama_file);
            $input['image'] = $nama_file;
        }

        HomeSlider::create([
            'title' => $input['title'],
            'first' => $input['first'],
            'second' => $input['second'],
            'image' => $input['image'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Home Sliders Added Succefully.')->success();
        return redirect()->route('admin.beranda.home-sliders.index')->with('status', 'Home Slider Created Successfully');
    }

    public function edit(string $id): View
    {   
        $viewData['data'] = HomeSlider::findOrFail($id);
        $viewData['title'] = 'Edit Beranda/ Home Sliders Data';

        return view('admin.beranda.home-slider.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'title'       =>  'required',        );

        $messages = array(
                'title.required' => 'Maaf, Judul Slider tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        if ($request->hasFile('image2')) {
            $data = HomeSlider::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/beranda/sliders/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['title', 'first', 'second', 'image', 'userid']));
        } else {
            HomeSlider::where('id', $id)->update($request->only(['title', 'first', 'second', 'userid']));
        }

        flash('Success! Home Sliders Updated Succefully.')->success();
        return redirect()->route('admin.beranda.home-sliders.index')->with('status', 'Home Slider Update Successfully');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = HomeSlider::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Home Sliders Deleted Succefully.')->success();
        return redirect()->route('admin.beranda.home-sliders.index');
    }
}
