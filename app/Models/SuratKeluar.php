<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;
    protected $table = 'suratkeluar';
    protected $fillable = [
        'nomorsurat',
        'lampiran',
        'perihal',
        'kepada',
        'di',
        'isi_surat',
        'tanggalsurat',
        'ttd_1',
        'ttd_2',
    ];
}
