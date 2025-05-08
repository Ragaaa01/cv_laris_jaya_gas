<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTabung extends Model
{
    use HasFactory;

    protected $table = 'jenis_tabungs';

    protected $primaryKey = 'id_jenis_tabung';

    protected $fillable = [
        'kode_jenis',
        'nama_jenis',
        'harga',
    ];
}
