<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Profil\PejabatUtama;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class PejabatUtamaController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = PejabatUtama::all();
        $viewData['title'] = 'Pejabat Utama';

        return view('admin.profil.pejabat.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData['title'] = 'Tambah Data Pejabat Utama';

        return view('admin.profil.pejabat.create')->with('viewData', $viewData);
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

            $file->storeAs('public/images/profil/pejabat/',$nama_file);
            $input['image'] = $nama_file;
        }

        PejabatUtama::create([
            'nama'     => $input['nama'],
            'profil'    => $input['profil'],
            'image'     => $input['image'],
            'jabatan'   => $input['jabatan'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Data Pejabat Utama Added Succefully.')->success();
        return redirect()->route('admin.profil.pejabat.index');
    }

    public function edit(string $id): View
    {   
        $viewData['data'] = PejabatUtama::findOrFail($id);
        $viewData['title'] = 'Edit Data Pejabat Utama';

        return view('admin.profil.pejabat.edit')->with('viewData', $viewData);
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
            $data = PejabatUtama::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/profil/pejabat/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['nama', 'profil', 'jabatan', 'image', 'userid']));
        } else {
            PejabatUtama::where('id', $id)->update($request->only(['nama', 'profil', 'jabatan', 'userid']));
        }

        flash('Success! Data Pejabat Utama Updated Succefully.')->success();
        return redirect()->route('admin.profil.pejabat.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = PejabatUtama::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Data Pejabat Utama Deleted Succefully.')->success();
        return redirect()->route('admin.profil.pejabat.index');
    }
}
