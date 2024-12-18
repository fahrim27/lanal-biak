<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function visimisi(Request $request): View
    {
        return view('landing.profil.visimisi');
    }

    public function strukturOrganisasi(Request $request): View
    {
        return view('landing.profil.strukturorganisasi');
    }

    public function pimpinan(Request $request): View
    {
        return view('landing.profil.pimpinan');
    }

    public function pju(Request $request): View
    {
        return view('landing.profil.pju');
    }

    public function dharma(Request $request): View
    {
        return view('landing.profil.dharma');
    }

    public function prajurit(Request $request): View
    {
        return view('landing.profil.prajurit');
    }
}
