<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarBimbingan extends Model
{
    use HasFactory;
    protected $fillable = [
       'nim',
        'nama',
        'judul',
       'lembaga',
       'set_pengajuan_ujian_kp',
    ];
}
