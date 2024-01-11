<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    //
    protected $fillable = ['id_tiket','jumlah_tiket','total_pembayaran','tanggal_pembelian'];
    protected $primaryKey = 'id_pembelian';
    
}
