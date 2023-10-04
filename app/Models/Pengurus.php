<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nm_pengurus',
        'bidang_id'
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id', 'id');
    }

    protected $table = 'penguruss';
}
