<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    Protected $fillable = [
        'id','nama','tgl_lahir','Created_at','Updated_at'
    ];
    //
}
