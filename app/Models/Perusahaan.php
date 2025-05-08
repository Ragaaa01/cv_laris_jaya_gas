<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaans';

    protected $primaryKey = 'id_perusahaans';

    protected $fillable = [
        'nama_perusahaan',
        'alamat_perusahaan',
        'email_perusahaan',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_perusahaan');
    }
}
