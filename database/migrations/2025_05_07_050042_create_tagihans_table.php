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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id('id_tagihan');
            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_transaksi')
                  ->references('id_transaksi')
                  ->on('transaksis')
                  ->onDelete('cascade');
                  
            $table->decimal('jumlah_dibayar', 15, 2);
            $table->decimal('sisa', 15, 2)->default(0);
            $table->unsignedTinyInteger('status')->default(0)->comment('0 = belum lunas, 1 = lunas');
            $table->date('tanggal_bayar_tagihan')->nullable();
            $table->integer('hari_keterlambatan')->nullable();
            $table->integer('periode_ke')->default(1);   // skala perhitungan per bulan
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihans');
    }
};
