<?php

namespace App\Http\Controllers;

use App\KategoriPaket;
use App\Newsletter;
use App\Paket;
use App\Pemesanan;
use App\Subscriber;
use App\ToppingPaket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class HomePageController extends Controller
{
    //
    public function index()
    {
        return view('pages/home');
    }

    public function order(Pemesanan $pemesanan, Request $request)
    {
        $no_pemesanan = "BFN-" . time();
        $data = $pemesanan;
        $data->no_pemesanan = $no_pemesanan;
        $data->pakets_id = $request->pakets_id;
        $data->topping_pakets_id = $request->topping_pakets_id;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nomor_identitas = $request->nomor_identitas;
        $data->no_hp = $request->no_hp;
        $data->jenkel = $request->jenkel;
        $data->alamat = $request->alamat;
        $data->total_harga = $request->total_harga;
        $response = $data->save();

        if ($response) {
            return response([
                'status' => true,
                'message' => 'Berhasil Mengirim Pengajuan!',
                'data' => $data
            ], 201);
        } else {
            return response([
                'status' => false,
                'message' => 'Gagal Mengirim Pengajuan!',
            ], 401);
        }
    }

    public function findOrder(Pemesanan $pemesanan, Request $request)
    {
        if (!$request->no_pemesanan) {
            return response([
                'status' => false,
                'message' => 'Nomor Pemesanan wajib diisi'
            ], 401);
        }

        $data = $pemesanan->with('pakets', 'topping_pakets')->where('no_pemesanan', $request->no_pemesanan)->get();
        if (count($data) > 0) {
            if ($data[0]['status_pemesanan'] == 'pending') {
                $data[0]['status_pemesanan'] = "Pemesanan anda sedang diajukan dan menunggu sedang menunggu konfirmasi";
            }elseif ($data[0]['status_pemesanan'] == 'proses') {
                $data[0]['status_pemesanan'] = "Pemesanan anda telah dikonfirmasi dan akan segera diproses pemesangannya";
            }elseif ($data[0]['status_pemesanan'] == 'done') {
                $data[0]['status_pemesanan'] = "Pemesanan anda telah terinstall di alamat anda";
            }
            return response([
                'status' => true,
                'message' => 'Data Ditemukan!',
                'data' => $data
            ], 200);
        } else {
            return response([
                'status' => false,
                'message' => 'Nomor Pemesanan Tidak Ditemukan!'
            ], 401);
        }
    }

    public function getPaket(KategoriPaket $kategoriPaket)
    {
        $data = $kategoriPaket->with('pakets')->get();
        return response([
            'status' => true,
            'message' => 'Berhasil Menampilkan Kategori Paket Beserta Paketnya!',
            'data' => $data
        ], 200);
    }

    public function showDetailPaket(Paket $paket, ToppingPaket $toppingPaket, $id)
    {
        $paket = $paket->with('kategori')->find($id);
        $topping = $toppingPaket->all();
        if ($paket) {
            return response([
                'status' => true,
                'id' => $id,
                'message' => 'Berhasil Menampilkan Paket Beserta Topping!',
                'data' => [
                    'paket' => $paket,
                    'topping' => $topping
                ]
            ], 200);
        } else {
            return response([
                'status' => false,
                'message' => 'Gagal Menampilkan Paket Beserta Topping!',
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
            return redirect("https://wa.me/6281268603378?text=" . $txt);
        } else {
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
        } else {
            return redirect("/")->withError('Gagal Berlangganan Newslatter');
        }
    }
}
