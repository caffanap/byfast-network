<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function index()
    {
        return view('pages/service');
    }
}
