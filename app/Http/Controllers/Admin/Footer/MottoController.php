<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Footer\Motto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class MottoController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = Motto::all();
        $viewData['title'] = 'Motto Satuan';

        return view('admin.footer.motto.index')->with('viewData', $viewData);
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

        Motto::create([
            'text' => $request['text'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Motto Satuan Added Succefully.')->success();
        return redirect()->route('admin.footer.motto.index');
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
        Motto::where('id', $id)->update($request->only(['text', 'userid']));

        flash('Success! Motto Satuan Updated Succefully.')->success();
        return redirect()->route('admin.footer.motto.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = Motto::findOrFail($id);
        $data->delete();

        flash('Success! Motto Satuan Deleted Succefully.')->success();
        return redirect()->route('admin.footer.motto.index');
    }
}
