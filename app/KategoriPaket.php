<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPaket extends Model
{
    protected $fillable = ['name', 'desc'];
    //
    public function pakets()
    {
        return $this->hasMany(Paket::class, 'kategori_pakets_id');
    }

}
