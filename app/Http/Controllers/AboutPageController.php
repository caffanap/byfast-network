<?php

namespace App\Http\Controllers;

use App\AboutUs;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    //
    public function index(AboutUs $aboutUs)
    {
        return view('pages/about', ['about' => $aboutUs->first()]);
    }
}
