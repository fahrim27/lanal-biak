<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Profil\VisiMisi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class VisiMisiController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = VisiMisi::all();
        $viewData['title'] = 'Visi Misi Satuan';

        return view('admin.profil.visimisi.index')->with('viewData', $viewData);
    }

    public function create()
    {

    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'text'       =>  'required',
        );

        $messages = array(
                'text.required' => 'Maaf, Kalimat tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }

        VisiMisi::create([
            'text' => $request['text'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Visi Misi Added Succefully.')->success();
        return redirect()->route('admin.profil.visimisi.index');
    }

    public function edit(string $id)
    {   

    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'text'       =>  'required',
        );

        $messages = array(
                'text.required' => 'Maaf, Kalimat tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        VisiMisi::where('id', $id)->update($request->only(['text', 'userid']));

        flash('Success! Visi Misi Updated Succefully.')->success();
        return redirect()->route('admin.profil.visimisi.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = VisiMisi::findOrFail($id);
        $data->delete();

        flash('Success! Visi Misi Deleted Succefully.')->success();
        return redirect()->route('admin.profil.visimisi.index');
    }
}
