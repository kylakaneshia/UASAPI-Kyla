<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $fillable = ['nama_pelanggan','email','nomor_telepon'];
    protected $primaryKey = 'id_tiket';
}
