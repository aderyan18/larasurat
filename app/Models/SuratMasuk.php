<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $table = 'suratmasuk';
    protected $fillable = [
        'nomor_surat',
        'perihal',
        'tanggal_kegiatan',
        'tempat_kegiatan',
        'pengirim',
        'file',
    ];
}
