<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _SiteController extends Controller
{
    public function __invoke()
    {
        return to_route('dashboard');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
