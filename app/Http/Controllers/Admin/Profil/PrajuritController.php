<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Profil\Prajurit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class PrajuritController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = Prajurit::all();
        $viewData['title'] = 'Prajurit Berprestasi';

        return view('admin.profil.prajurit.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData['title'] = 'Tambah Data Prajurit Berprestasi';

        return view('admin.profil.prajurit.create')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'nama'         =>  'required',
            'image'         =>  'required',
            'profil'        =>  'required',
            'jabatan'       =>  'required',
        );

        $messages = array(
                'nama.required' => 'Maaf, Nama tidak boleh dikosongi.',
                'image.required' => 'Maaf, Foto/ Gambar tidak boleh dikosongi.',
                'profil.required' => 'Maaf, Profil tidak boleh dikosongi.',
                'jabatan.required' => 'Maaf, Jabatan tidak boleh dikosongi.',
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

            $file->storeAs('public/images/profil/prajurit/',$nama_file);
            $input['image'] = $nama_file;
        }

        Prajurit::create([
            'nama'     => $input['nama'],
            'profil'    => $input['profil'],
            'image'     => $input['image'],
            'jabatan'   => $input['jabatan'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Data Prajurit Berprestasi Added Succefully.')->success();
        return redirect()->route('admin.profil.prajurit.index');
    }

    public function edit(string $id): View
    {   
        $viewData['data'] = Prajurit::findOrFail($id);
        $viewData['title'] = 'Edit Data Prajurit Berprestasi';

        return view('admin.profil.prajurit.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'nama'         =>  'required',
            'profil'        =>  'required',
            'jabatan'       =>  'required',
        );

        $messages = array(
                'nama.required' => 'Maaf, Nama tidak boleh dikosongi.',
                'profil.required' => 'Maaf, Profil tidak boleh dikosongi.',
                'jabatan.required' => 'Maaf, Jabatan tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        if ($request->hasFile('image2')) {
            $data = Prajurit::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/profil/prajurit/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['nama', 'profil', 'jabatan', 'image', 'userid']));
        } else {
            Prajurit::where('id', $id)->update($request->only(['nama', 'profil', 'jabatan', 'userid']));
        }

        flash('Success! Data Prajurit Berprestasi Updated Succefully.')->success();
        return redirect()->route('admin.profil.prajurit.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = Prajurit::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Data Prajurit Berprestasi Deleted Succefully.')->success();
        return redirect()->route('admin.profil.prajurit.index');
    }
}
