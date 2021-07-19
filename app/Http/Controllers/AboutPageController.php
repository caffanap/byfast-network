<?php

namespace App\Http\Controllers;

use App\AboutUs;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        return view('pages/about', compact('aboutUs'));
    }
}
