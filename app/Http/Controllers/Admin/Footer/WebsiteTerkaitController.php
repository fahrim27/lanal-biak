<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Footer\WebsiteTerkait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class WebsiteTerkaitController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = WebsiteTerkait::all();
        $viewData['title'] = 'Website Terkait';

        return view('admin.footer.websiteterkait.index')->with('viewData', $viewData);
    }

    public function create()
    {

    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'title'       =>  'required',
            'link'       =>  'required',
        );

        $messages = array(
                'title.required' => 'Maaf, Nama Website tidak boleh dikosongi.',
                'link.required' => 'Maaf, Url Link tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }

        WebsiteTerkait::create([
            'title' => $request['title'],
            'link' => $request['link'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Website Terkait Added Succefully.')->success();
        return redirect()->route('admin.footer.websiteterkait.index');
    }

    public function edit(string $id)
    {   

    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'title'       =>  'required',
            'link'       =>  'required',
        );

        $messages = array(
                'title.required' => 'Maaf, Nama Website tidak boleh dikosongi.',
                'link.required' => 'Maaf, Url Link tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        WebsiteTerkait::where('id', $id)->update($request->only(['title', 'link', 'userid']));

        flash('Success! Website Terkait Updated Succefully.')->success();
        return redirect()->route('admin.footer.websiteterkait.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = WebsiteTerkait::findOrFail($id);
        $data->delete();

        flash('Success! Website Terkait Deleted Succefully.')->success();
        return redirect()->route('admin.footer.websiteterkait.index');
    }
}
