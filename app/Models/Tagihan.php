<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = 'tagihans';
    protected $primaryKey = 'id_tagihan';

    protected $fillable = [
        'id_transaksi',
        'jumlah_dibayar',
        'sisa',
        'status',
        'tanggal_bayar_tagihan',
        'hari_keterlambatan',
        'periode_ke',
        'keterangan',
    ];

    protected $casts = [
        'status' => 'boolean',
        'tanggal_bayar_tagihan' => 'date',
    ];

    protected $attributes = [
        'status' => false,
        'periode_ke' => 1,
        'sisa' => 0,
    ];

    // Relasi
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }

    // Custom method
    public function updatePembayaran(float $jumlahBayar)
    {
        $this->jumlah_dibayar += $jumlahBayar;
        $this->sisa = max(0, $this->sisa - $jumlahBayar);

        if ($this->sisa <= 0) {
            $this->status = true;
            $this->tanggal_bayar_tagihan = now();
        }

        $this->save();
    }
}
