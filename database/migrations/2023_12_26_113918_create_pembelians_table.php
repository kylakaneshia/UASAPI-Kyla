<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->bigIncrements("id_pembelian");
            $table->unsignedBigInteger("id_tiket");
            $table->integer("jumlah_tiket");
            $table->float("total_pembayaran", 8, 2);
            $table->dateTime("tanggal_pembelian");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
