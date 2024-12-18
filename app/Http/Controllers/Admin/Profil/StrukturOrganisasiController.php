<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Profil\StrukturOrganisasi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class StrukturOrganisasiController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = StrukturOrganisasi::all();
        $viewData['title'] = 'Struktur Organisasi';

        return view('admin.profil.struktur.index')->with('viewData', $viewData);
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

            $file->storeAs('public/images/profil/struktur/',$nama_file);
            $input['image'] = $nama_file;
        }

        StrukturOrganisasi::create([
            'title' => $input['title'],
            'image' => $input['image'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Struktur Organisasi Added Succefully.')->success();
        return redirect()->route('admin.profil.struktur.index');
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
            $data = StrukturOrganisasi::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/profil/struktur/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['title', 'image', 'userid']));
        } else {
            StrukturOrganisasi::where('id', $id)->update($request->only(['title', 'userid']));
        }

        flash('Success! Struktur Organisasi Updated Succefully.')->success();
        return redirect()->route('admin.profil.struktur.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = StrukturOrganisasi::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Struktur Organisasi Deleted Succefully.')->success();
        return redirect()->route('admin.profil.struktur.index');
    }
}
