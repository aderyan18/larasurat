<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\SuratKeluar;
use Redirect;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $data = SuratKeluar::all();
        // dd($data);
        return view('suratkeluar.suratkeluar', compact('data'));
    }
    public function addsuratkeluar()
    {
        return view('suratkeluar.tambahsuratkeluar');
    }
    public function insertsuratkeluar(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'nomorsurat' => 'required',
        //     'lampiran' => 'required',
        //     'perihal' => 'required',
        //     'kepada' => 'required',
        //     'di' => 'required',
        //     'isi_surat' => 'required',
        //     'tanggalsurat' => 'required',
        //     'ttd_1' => 'required',
        //     'ttd_2' => 'required',
        // ]);

        // $data = new SuratKeluar();
        // $data->nomorsurat = $request->nomorsurat;
        // $data->lampiran = $request->lampiran;
        // $data->perihal = $request->perihal;
        // $data->kepada = $request->kepada;
        // $data->di = $request->di;
        // $data->isi_surat = $request->isi_surat;
        // $data->tanggalsurat = $request->tanggalsurat;
        // $data->ttd_1 = $request->ttd_1;
        // $data->ttd_2 = $request->ttd_2;
        // $data->save();
        // return redirect('/suratkeluar')->with(
        //     'status',
        //     'Data Surat Keluar Berhasil Ditambahkan'
        // );
    }
    public function showsuratkeluar($id)
    {
        $data = SuratKeluar::find($id);
        return view('suratkeluar.editsuratkeluar', compact('data'));
    }
    public function updatesuratkeluar(Request $request, $id)
    {
        $this->validate($request, [
            'nomorsurat' => 'required',
            'tanggalsurat' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required',
            'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx',
        ]);
        if ($request->hasFile('file')) {
            $request
                ->file('file')
                ->move('file/', $request->file->getClientOriginalName());
            $data = SuratKeluar::find($id);
            $data->nomorsurat = $request->nomorsurat;
            $data->tanggalsurat = $request->tanggalsurat;
            $data->perihal = $request->perihal;
            $data->tujuan = $request->tujuan;
            $data->file = $request->file->getClientOriginalName();
            $data->save();
        }
        return redirect('/suratkeluar')->with(
            'status',
            'Data Surat Keluar Berhasil Diubah'
        );
    }
    public function deletesuratkeluar($id)
    {
        $data = SuratKeluar::find($id);
        $data->delete();
        return redirect('/suratkeluar')->with(
            'status',
            'Data Surat Keluar Berhasil Dihapus'
        );
    }
}
