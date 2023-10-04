<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'sekolah',
        'universitas',
        'jurusan',
        'fakultas',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'telepon',
        'gambar'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function pendaftaran()
    {
        return $this->hasOne(Pendaftaran::class);
    }
}
