<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = ['kategori_pakets_id', 'name', 'desc', 'img', 'harga'];
    //
    public function kategori()
    {
        return $this->belongsTo(KategoriPaket::class, 'kategori_pakets_id');
    }

}
