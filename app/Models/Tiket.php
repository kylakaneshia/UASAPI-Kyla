<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    //
    protected $fillable = ['id_konser','harga_tiket','kategori_tiket'];
    protected $primaryKey = 'id_pembelian';
}
