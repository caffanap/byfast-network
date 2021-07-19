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
            return datatables()->of($data)->addColumn('action', function($data){
                $button = '<button type="button" name="view" id="'.$data->id.'" class="view btn btn-info btn-sm"><i class="far fa-eye"></i> More</button>';     
                return $button;
            })->make();
        }
        return view('admin.pemesanan.index');

    }

    public function edit(Pemesanan $pemesanan, Request $request)
    {
        return response()->json($pemesanan->with('pakets', 'topping_pakets')->where('id', $request->id)->first());
    }

    public function store(Request $request)
    {
        $id = $request->id;

        $post = Pemesanan::updateOrCreate(['id' => $id],
        [
            'status_pemesanan'  =>  $request->status_pemesanan
        ]);

        return response()->json($post);
    }
    //
}
