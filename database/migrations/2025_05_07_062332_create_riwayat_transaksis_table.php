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
        Schema::create('riwayat_transaksis', function (Blueprint $table) {
            $table->id('id_riwayat'); // added primary key since id_transaksi is foreign key?
            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_transaksi')
                  ->references('id_transaksi')
                  ->on('transaksis')
                  ->onDelete('cascade');
            $table->date('tanggal_selesai');
            $table->string('status_akhir');
            $table->decimal('total_pembayaran', 15, 2);
            $table->decimal('denda', 15, 2);
            $table->integer('durasi_peminjaman');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_transaksis');
    }
};
