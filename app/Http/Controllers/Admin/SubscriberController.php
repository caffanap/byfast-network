<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    //
    public function index(Subscriber $subscriber)
    {
        $data = $subscriber->all();
        return view('admin.subscriber', ['subscriber' => $data]);
    }

    public function show(Subscriber $subscriber)
    {
        $data = $subscriber->all();
        return $data;
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
            $txt = urlencode("Hallo nama saya $request->nama_lengkap. ($request->nama_panggilan) \nEmail : $request->email \nNo Telpon : $request->no_telpon \nUmur Kehamilan : $request->umur_kehamilan Bulan \nAlamat : $request->alamat \n\nSaya ingin berlangganan nih :)");
            return redirect("https://wa.me/6281268603378?text=".$txt);
        }else{
            return false;
        }
    }

    public function destroy(Request $request, Subscriber $subscriber)
    {
        $data = $subscriber->find($request->id);
        if ($data) {
            $delete = $data->delete();
            if ($delete) {
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
