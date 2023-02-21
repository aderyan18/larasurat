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
}
