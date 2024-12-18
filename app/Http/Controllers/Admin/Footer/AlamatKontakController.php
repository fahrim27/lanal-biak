<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageStorage;
use App\Models\Footer\AlamatKontak;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class AlamatKontakController extends Controller
{
    public function index(): View
    {
        $viewData['data'] = AlamatKontak::all();
        $viewData['title'] = 'Alamat dan Kontak';

        return view('admin.footer.alamatkontak.index')->with('viewData', $viewData);
    }

    public function create()
    {

    }

    public function store(Request $request): RedirectResponse
    {
        $rules = array(
            'alamat'       =>  'required',
            'phone'       =>  'required',
            'email'       =>  'required',
        );

        $messages = array(
                'alamat.required' => 'Maaf, Alamat tidak boleh dikosongi.',
                'phone.required' => 'Maaf, Nomor Telepon tidak boleh dikosongi.',
                'email.required' => 'Maaf, Email tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }

        AlamatKontak::create([
            'alamat' => $request['alamat'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'userid' => auth()->user()->id,
        ]);

        flash('Success! Alamat dan kontak Added Succefully.')->success();
        return redirect()->route('admin.footer.alamatkontak.index');
    }

    public function edit(string $id)
    {   

    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'alamat'       =>  'required',
            'phone'       =>  'required',
            'email'       =>  'required',
        );

        $messages = array(
                'alamat.required' => 'Maaf, Alamat tidak boleh dikosongi.',
                'phone.required' => 'Maaf, Nomor Telepon tidak boleh dikosongi.',
                'email.required' => 'Maaf, Email tidak boleh dikosongi.',
            );

        $error = Validator::make($request->all(), $rules, $messages);

        if($error->fails())
        {
            return redirect()->back()->with(['errors' => $error->errors()->all()]);
        }
        
        $request['userid'] = auth()->user()->id;
        AlamatKontak::where('id', $id)->update($request->only(['alamat', 'phone', 'email', 'userid']));

        flash('Success! Alamat Kontak Updated Succefully.')->success();
        return redirect()->route('admin.footer.alamatkontak.index');
    }

    public function show(string $id)
    {
        
    }

    public function destroy(string $id): RedirectResponse
    {   
        $data = AlamatKontak::findOrFail($id);
        $data->delete();

        flash('Success! Alamat dan Kontak Deleted Succefully.')->success();
        return redirect()->route('admin.footer.alamatkontak.index');
    }
}
