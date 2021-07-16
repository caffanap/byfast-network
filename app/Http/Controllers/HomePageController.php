<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\Pemesanan;
use App\Subscriber;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function index()
    {
        return view('pages/home');
    }

    public function findOrder(Pemesanan $pemesanan, Request $request)
    {
        $data = $pemesanan->where(['no_pemesanan' => $request->no_pemesanan])->get();
        if ($data) {
            return response([
                'status' => true,
                'message' => 'Data Ditemukan!',
                'data' => $data
            ], 200);
        }else{
            return response([
                'status' => false,
                'message' => 'Nomor Pemesanan Tidak Ditemukan!'
            ], 401);
        }
    }

    public function store(Request $request, Subscriber $subscriber)
    {
        $data = $subscriber;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nama_panggilan = $request->nama_panggilan;
        $data->email = $request->email;
        $data->no_telpon = $request->no_telpon;
        $data->tertarik = $request->tertarik;
        $data->umur_kehamilan = $request->umur_kehamilan;
        $data->alamat = $request->alamat;
        $response = $data->save();
        if ($response) {
            $txt = urlencode("Hallo nama saya $request->nama_lengkap. ($request->nama_panggilan) \nEmail : $request->email \nNo Telpon : $request->no_telpon \nUmur Kehamilan : $request->umur_kehamilan Bulan \nAlamat : $request->alamat \nSaya tertarik untuk : $request->tertarik \n\nSaya ingin berlangganan nih :)");
            return redirect("https://wa.me/6281268603378?text=".$txt);
        }else{
            return false;
        }
    }

    public function newsleter(Request $request, Newsletter $newsletter)
    {
        $data = $newsletter;
        $data->email = $request->email;
        $response = $data->save();
        if ($response) {
            return redirect("/")->withError('Berhasil Berlangganan Newslatter');
        }else{
            return redirect("/")->withError('Gagal Berlangganan Newslatter');
        }
    }

}
