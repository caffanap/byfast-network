<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';
    
    protected $fillable = ['desc1', 'desc2', 'desc3', 'desc4', 'desc5'];
    //
}
