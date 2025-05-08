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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nik');
            $table->string('no_telepon');
            $table->unsignedBigInteger('id_perusahaan')->nullable(); 
            $table->foreign('id_perusahaan')
                  ->references('id_perusahaan') 
                  ->on('perusahaans')
                  ->onDelete('cascade');
            $table->boolean('status_aktif')->default(false);
            $table->unsignedTinyInteger('role')->default(2)->comment('1 = administrator, 2 = pelanggan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
