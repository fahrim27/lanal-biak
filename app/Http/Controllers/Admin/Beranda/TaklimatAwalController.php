<?php

namespace App\Http\Controllers\Admin\Beranda;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Beranda\TaklimatAwalKomandan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class TaklimatAwalController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = TaklimatAwalKomandan::all();
        $viewData['title'] = 'Taklimat Awal Komandan';

        return view('admin.beranda.taklimat-awal.index')->with('viewData', $viewData);
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

        TaklimatAwalKomandan::create([
            'text' => $request['text'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Taklimat Awal Komandan Added Succefully.')->success();
        return redirect()->route('admin.beranda.taklimat-awal.index');
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
        TaklimatAwalKomandan::where('id', $id)->update($request->only(['text', 'userid']));

        flash('Success! Taklimat Awal Komandan Updated Succefully.')->success();
        return redirect()->route('admin.beranda.taklimat-awal.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = TaklimatAwalKomandan::findOrFail($id);
        $data->delete();

        flash('Success! Taklimat Awal Komandan Deleted Succefully.')->success();
        return redirect()->route('admin.beranda.taklimat-awal.index');
    }
}
