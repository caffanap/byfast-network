<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ["nama_lengkap", "nama_panggilan", "email", "no_telpon", "umur_kehamilan", "alamat"];
    //
}
