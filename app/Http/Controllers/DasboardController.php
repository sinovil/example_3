<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        return view('dasboard');
    }

    public function haloperator()
    {
        return view('haloperator');
    }

    public function halmasyarakat()
    {
        return view('halmasyarakat');
    }
}