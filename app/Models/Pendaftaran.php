<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'anggota_id',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'universitas',
        'jurusan',
        'kecamatan',
        'agama',
        'alamat',
        'penyakit',
        'telepon_ortu',
        'gambar',
        'status'
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    protected $table = 'pendaftarans';
}
