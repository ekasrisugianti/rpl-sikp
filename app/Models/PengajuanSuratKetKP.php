<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSuratKetKP extends Model
{
    public $table = "surat_kps";
    use HasFactory;
    protected $fillable = [
   'semester',
    'tahun',
    'NIM',
    'lembaga',
    'pimpinan',
    'noTelp',
    'alamat',
    'fax',
    'dokumen',
    'statusverifikasi',
];
    
}
