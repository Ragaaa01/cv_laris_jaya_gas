<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTransaksi extends Model
{
    use HasFactory;

    protected $table = 'riwayat_transaksis';

    protected $primaryKey = 'id_riwayat';

    protected $fillable = [
        'id_transaksi',
        'tanggal_selesai',
        'status_akhir',
        'total_pembayaran',
        'denda',
        'durasi_peminjaman',
        'keterangan',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
}
