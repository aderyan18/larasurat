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
        SuratKeluar::create([
            'nomorsurat' => $request->nomorsurat,
            'lampiran' => $request->lampiran,
            'perihal' => $request->perihal,
            'kepada' => $request->kepada,
            'di' => $request->di,
            'isi_surat' => $request->isi_surat,
            'tanggalsurat' => $request->tanggalsurat,
            'ttd_1' => $request->ttd_1,
            'ttd_2' => $request->ttd_2,
        ]);
        return redirect('/suratkeluar')->with(
            'status',
            'Data Berhasil Ditambahkan'
        );
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
