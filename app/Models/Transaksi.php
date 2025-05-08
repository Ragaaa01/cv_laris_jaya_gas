<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'nama',
        'id_user',
        'tanggal_transaksi',
        'waktu_transaksi',
        'total_transaksi',
        'jumlah_dibayar',
        'metode_pembayaran',
        'id_status_transaksi',
        'tanggal_jatuh_tempo',
    ];

    protected $casts = [
        'tanggal_transaksi' => 'date',
        'tanggal_jatuh_tempo' => 'date',
    ];

    protected $attributes = [
        'metode_pembayaran' => 'tunai',
    ];

    // Relasi
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function statusTransaksi()
    {
        return $this->belongsTo(StatusTransaksi::class, 'id_status_transaksi');
    }

    public function detailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_transaksi');
    }

    public function tagihans()
    {
        return $this->hasMany(Tagihan::class, 'id_transaksi');
    }
}
