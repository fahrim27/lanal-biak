<?php

namespace App\Http\Controllers\Admin\Beranda;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Beranda\TugasPokok;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class TugasPokokController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = TugasPokok::all();
        $viewData['title'] = 'Tugas Pokok Satuan';

        return view('admin.beranda.tugas-pokok.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData['title'] = 'Add Tugas Pokok Satuan';

        return view('admin.beranda.tugas-pokok.create')->with('viewData', $viewData);
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

            $file->storeAs('public/images/beranda/tugaspokok/',$nama_file);
            $input['image'] = $nama_file;
        }

        TugasPokok::create([
            'title' => $input['title'],
            'description' => $input['description'],
            'image' => $input['image'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Tugas Pokok Satuan Added Succefully.')->success();
        return redirect()->route('admin.beranda.tugas-pokok.index');
    }

    public function edit(string $id): View
    {   
        $viewData['data'] = TugasPokok::findOrFail($id);
        $viewData['title'] = 'Edit Tugas Pokok Satuan Data';

        return view('admin.beranda.tugas-pokok.edit')->with('viewData', $viewData);
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
            $data = TugasPokok::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/beranda/tugaspokok/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['title', 'description', 'image', 'userid']));
        } else {
            TugasPokok::where('id', $id)->update($request->only(['title', 'description', 'userid']));
        }

        flash('Success! Tugas Pokok Satuan Updated Succefully.')->success();
        return redirect()->route('admin.beranda.tugas-pokok.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = TugasPokok::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Tugas Pokok Satuan Deleted Succefully.')->success();
        return redirect()->route('admin.beranda.tugas-pokok.index');
    }
}
