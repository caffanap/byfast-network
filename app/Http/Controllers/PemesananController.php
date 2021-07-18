<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(Request $request, Pemesanan $pemesanan)
    {
        $data = $pemesanan->with('pakets', 'topping_pakets')->get();
        if ($request->ajax()) {
        }
        return datatables()->of($data)->make();
        // return $data;
    }
    //
}
