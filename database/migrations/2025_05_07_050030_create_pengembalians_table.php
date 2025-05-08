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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id('id_pengembalian');
        
            $table->unsignedBigInteger('id_peminjaman');
            $table->foreign('id_peminjaman')
                  ->references('id_peminjaman')
                  ->on('peminjamans')
                  ->onDelete('cascade');
        
            $table->date('tanggal_kembali');
            $table->unsignedTinyInteger('kondisi_tabung')->default(1)->comment('1 = baik, 2 = rusak');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
