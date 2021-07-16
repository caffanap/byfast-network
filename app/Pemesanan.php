<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = ['pakets_id', 'topping_pakets_id', 'total_harga', 'nama_lengkap', 'nomor_identitas', 'no_hp', 'jenkel', 'alamat', 'status_pemesanan'];

    //
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    public function topping()
    {
        return $this->belongsTo(ToppingPaket::class);
    }
}
