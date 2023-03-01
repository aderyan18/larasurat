<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailsKeluar;
use App\Models\SuratKeluar;
use PDF;

class DetailsKeluarController extends Controller
{
    public function detailskeluar()
    {
        return view('suratkeluar.detailskeluar');
    }
    // public function generatePDF()
    // {
    //     $suratkeluars = SuratKeluar::get();

    //     $data = [
    //         // 'title' => 'Welcome to LaravelTuts.com',
    //         // 'date' => date('m/d/Y'),
    //         // 'users' => $users,
    //         'suratkeluars' => $suratkeluars,
    //         'title1' => 'BADAN PENGURUS HARIAN (BPH)',
    //         'title2' => 'DIPANEGARA COMPUTER CLUB (DCC)',
    //         'title3' => 'UNIVERSITAS DIPA MAKASSAR',
    //         'title4' => 'PERIODE 2022-2023',
    //         'title5' =>
    //             'Sekretariat : BTN Antara Blok A11 No.2, Telp. : 082250332018',
    //     ];

    //     $pdf = PDF::loadView('createletter.createletter', $data);

    //     return $pdf->download('suratkeluar.pdf');
    // }
}
