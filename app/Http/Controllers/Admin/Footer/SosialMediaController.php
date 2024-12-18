<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Footer\SosialMedia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class SosialMediaController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = SosialMedia::all();
        $viewData['title'] = 'Sosial Media';

        return view('admin.footer.sosialmedia.index')->with('viewData', $viewData);
    }

    public function create()
    {

    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'title'       =>  'required',
            'link'       =>  'required',
            'icon'       =>  'required',
        );

        $messages = array(
                'title.required' => 'Maaf, Nama Sosial Media tidak boleh dikosongi.',
                'link.required' => 'Maaf, Url Link tidak boleh dikosongi.',
                'icon.required' => 'Maaf, Icon tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }

        SosialMedia::create([
            'title' => $request['title'],
            'link' => $request['link'],
            'icon' => $request['icon'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Sosial Media Added Succefully.')->success();
        return redirect()->route('admin.footer.sosialmedia.index');
    }

    public function edit(string $id)
    {   

    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'title'       =>  'required',
            'link'       =>  'required',
            'icon'       =>  'required',
        );

        $messages = array(
                'title.required' => 'Maaf, Nama Sosial Media tidak boleh dikosongi.',
                'link.required' => 'Maaf, Url Link tidak boleh dikosongi.',
                'icon.required' => 'Maaf, Icon tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        SosialMedia::where('id', $id)->update($request->only(['title', 'link', 'icon', 'userid']));

        flash('Success! Sosial Media Updated Succefully.')->success();
        return redirect()->route('admin.footer.sosialmedia.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = SosialMedia::findOrFail($id);
        $data->delete();

        flash('Success! Sosial Media Deleted Succefully.')->success();
        return redirect()->route('admin.footer.sosialmedia.index');
    }
}
