<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Profil\Pimpinan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class PimpinanController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = Pimpinan::all();
        $viewData['title'] = 'Pimpinan';

        return view('admin.profil.pimpinan.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData['title'] = 'Tambah Data Pimpinan';

        return view('admin.profil.pimpinan.create')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'nama'         =>  'required',
            'image'         =>  'required',
            'profil'        =>  'required',
            'jabatan'       =>  'required',
            'masajabatan'   =>  'required',
        );

        $messages = array(
                'nama.required' => 'Maaf, Nama tidak boleh dikosongi.',
                'image.required' => 'Maaf, Foto/ Gambar tidak boleh dikosongi.',
                'profil.required' => 'Maaf, Profil tidak boleh dikosongi.',
                'jabatan.required' => 'Maaf, Jabatan tidak boleh dikosongi.',
                'masajabatan.required' => 'Maaf, Masa jabatan tidak boleh dikosongi.',
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

            $file->storeAs('public/images/profil/pimpinan/',$nama_file);
            $input['image'] = $nama_file;
        }

        Pimpinan::create([
            'nama'     => $input['nama'],
            'profil'    => $input['profil'],
            'image'     => $input['image'],
            'jabatan'   => $input['jabatan'],
            'masajabatan'   => $input['masajabatan'],
            'pendidikan'   => $input['pendidikan'],
            'riwayatjabatan'   => $input['riwayatjabatan'],
            'penghargaan'   => $input['penghargaan'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Data Pimpinan Added Succefully.')->success();
        return redirect()->route('admin.profil.pimpinan.index');
    }

    public function edit(string $id): View
    {   
        $viewData['data'] = Pimpinan::findOrFail($id);
        $viewData['title'] = 'Edit Data Pimpinan';

        return view('admin.profil.pimpinan.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'nama'         =>  'required',
            'profil'        =>  'required',
            'jabatan'       =>  'required',
            'masajabatan'   =>  'required',
        );

        $messages = array(
                'nama.required' => 'Maaf, Nama tidak boleh dikosongi.',
                'profil.required' => 'Maaf, Profil tidak boleh dikosongi.',
                'jabatan.required' => 'Maaf, Jabatan tidak boleh dikosongi.',
                'masajabatan.required' => 'Maaf, Masa jabatan tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        if ($request->hasFile('image2')) {
            $data = Pimpinan::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/profil/pimpinan/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['nama', 'profil', 'jabatan', 'masajabatan', 'pendidikan', 'riwayatjabatan', 'penghargaan', 'image', 'userid']));
        } else {
            Pimpinan::where('id', $id)->update($request->only(['nama', 'profil', 'jabatan', 'masajabatan', 'pendidikan', 'riwayatjabatan', 'penghargaan', 'userid']));
        }

        flash('Success! Data Pimpinan Updated Succefully.')->success();
        return redirect()->route('admin.profil.pimpinan.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = Pimpinan::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Data Pimpinan Deleted Succefully.')->success();
        return redirect()->route('admin.profil.pimpinan.index');
    }
}
