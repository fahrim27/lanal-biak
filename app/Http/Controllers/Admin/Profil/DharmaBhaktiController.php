<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Profil\DharmaBhakti;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class DharmaBhaktiController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = DharmaBhakti::all();
        $viewData['title'] = 'Dharma Bhakti';

        return view('admin.profil.dharmabhakti.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData['title'] = 'Tambah Data Dharma Bhakti';

        return view('admin.profil.dharmabhakti.create')->with('viewData', $viewData);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'title'         =>  'required',
            'image'         =>  'required',
            'description'        =>  'required',
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

            $file->storeAs('public/images/profil/dharmabhakti/',$nama_file);
            $input['image'] = $nama_file;
        }

        DharmaBhakti::create([
            'title'     => $input['title'],
            'description'    => $input['description'],
            'image'     => $input['image'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Data Dharma Bhakti Added Succefully.')->success();
        return redirect()->route('admin.profil.dharmabhakti.index');
    }

    public function edit(string $id): View
    {   
        $viewData['data'] = DharmaBhakti::findOrFail($id);
        $viewData['title'] = 'Edit Data Dharma Bhakti';

        return view('admin.profil.dharmabhakti.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'title'         =>  'required',
            'description'        =>  'required',
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
            $data = DharmaBhakti::where('id', $id);

            $file = $request->file('image2');

            $nama_file = Str::random(30).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/images/profil/dharmabhakti/',$nama_file);
            $request['image'] = $nama_file;

            $data->update($request->only(['title', 'description', 'image', 'userid']));
        } else {
            DharmaBhakti::where('id', $id)->update($request->only(['title', 'description', 'userid']));
        }

        flash('Success! Data Dharma Bhakti Updated Succefully.')->success();
        return redirect()->route('admin.profil.dharmabhakti.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = DharmaBhakti::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        flash('Success! Data Dharma Bhakti Deleted Succefully.')->success();
        return redirect()->route('admin.profil.dharmabhakti.index');
    }
}
