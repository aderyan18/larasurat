<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suratmasuk')->insert([
            'nomor_surat' => 'D/123/2022',
            'perihal' => 'belajar bersama',
            'tanggal_kegiatan' => '2021-01-01',
            'tempat_kegiatan' => 'aula kampus',
            'pengirim' => 'ukm xxx',
        ]);
    }
}
