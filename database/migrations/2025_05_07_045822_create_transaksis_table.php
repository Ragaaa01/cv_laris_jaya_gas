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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->string('nama')->nullable();
        
            // Pastikan id_user merujuk ke kolom yang benar di tabel users
            $table->foreignId('id_user')->nullable()->constrained('users', 'id_user')->nullOnDelete();
        
            $table->date('tanggal_transaksi');
            $table->time('waktu_transaksi');
            $table->decimal('total_transaksi', 15, 2);
            $table->decimal('jumlah_dibayar', 15, 2);
            $table->enum('metode_pembayaran', ['tunai', 'transfer']);
        
            $table->unsignedBigInteger('id_status_transaksi'); 
            $table->foreign('id_status_transaksi')
                  ->references('id_status_transaksi') // Pastikan ini sesuai dengan kolom di tabel status_transaksis
                  ->on('status_transaksis')
                  ->onDelete('cascade');
        
            $table->date('tanggal_jatuh_tempo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
