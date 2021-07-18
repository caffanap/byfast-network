<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function show($id)
    {
        return view('pages/paket-show');
    }
}
