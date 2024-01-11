<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konser extends Model
{
    //
    protected $fillable = ['nama_konser','tanggal_waktu_konser','lokasi','kapasitas_tempat_duduk'];
}
