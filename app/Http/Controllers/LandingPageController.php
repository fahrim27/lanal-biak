<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(Request $request): View
    {
        return view('landing.index');
    }
}
