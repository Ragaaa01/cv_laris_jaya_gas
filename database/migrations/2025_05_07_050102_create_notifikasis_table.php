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
        Schema::create('notifikasis', function (Blueprint $table) {
            $table->id('id_notifikasi');
            $table->unsignedBigInteger('id_tagihan');
            $table->foreign('id_tagihan')
                  ->references('id_tagihan')
                  ->on('tagihans')
                  ->onDelete('cascade');
                  
                  $table->unsignedBigInteger('id_template');
                  $table->foreign('id_template')
                        ->references('id_template')
                        ->on('notifikasi_template')
                        ->onDelete('cascade');
            $table->date('tanggal_terjadwal');
            $table->unsignedTinyInteger('status_baca')->default(0)->comment('1 = true, 2 = false');
            $table->time('waktu_dikirim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasis');
    }
};
