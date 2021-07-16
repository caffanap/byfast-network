<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPaket extends Model
{
    protected $fillable = ['name', 'desc'];
    //
    public function paket()
    {
        return $this->hasMany(Paket::class);
    }

}
