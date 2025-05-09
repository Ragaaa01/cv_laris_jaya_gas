<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifikasiTemplate extends Model
{
    use HasFactory;

    protected $table = 'notifikasi_template';

    protected $primaryKey = 'id_template';

    protected $fillable = [
        'nama_template',
        'hari_set',
        'judul',
        'isi',
    ];

    public function notifikasis()
    {
        return $this->hasMany(Notifikasi::class, 'id_template');
    }
}
