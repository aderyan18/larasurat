<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\SuratMasuk;
use Redirect;
use Illuminate\Http\UploadedFile;

class SuratMasukController extends Controller
{
    public function index()
    {
        $data = SuratMasuk::all();
        // dd($data);
        // $data = SuratMasuk::with('data')->paginate(5);
        return view('suratmasuk.suratmasuk', compact('data'));
    }
    public function addsuratmasuk()
    {
        return view('suratmasuk.tambahsuratmasuk');
    }
    public function insertsuratmasuk(Request $request)
    {
        $this->validate($request, [
            'nomor_surat' => 'required',
            'perihal' => 'required',
            'tanggal_kegiatan' => 'required',
            'tempat_kegiatan' => 'required',
            'pengirim' => 'required',
            'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx',
        ]);
        if ($request->hasFile('file')) {
            $request
                ->file('file')
                ->move('file/', $request->file->getClientOriginalName());
            $data = new SuratMasuk();
            $data->nomor_surat = $request->nomor_surat;
            $data->perihal = $request->perihal;
            $data->tanggal_kegiatan = $request->tanggal_kegiatan;
            $data->tempat_kegiatan = $request->tempat_kegiatan;
            $data->pengirim = $request->pengirim;
            $data->file = $request->file->getClientOriginalName();
            $data->save();
        }
        // $file = $request->file('file');
        // $nama_file =
        //     'FT' .
        //     date('Ymdhis') .
        //     '_' .
        //     $request->file('file')->getClientOriginalName();
        // $data = new SuratMasuk();
        // $data->nomor_surat = $request->nomor_surat;
        // $data->perihal = $request->perihal;
        // $data->tanggal_kegiatan = $request->tanggal_kegiatan;
        // $data->tempat_kegiatan = $request->tempat_kegiatan;
        // $data->pengirim = $request->pengirim;
        // $data->file = $nama_file;
        // $data->save();
        return redirect('/suratmasuk')->with(
            'status',
            'Data Surat Masuk Berhasil Ditambahkan'
        );
    }
    public function showsuratmasuk($id)
    {
        $data = SuratMasuk::find($id);
        // dd($data);
        return view('suratmasuk.editsuratmasuk', compact('data'));
    }
    public function updatesuratmasuk(Request $request, $id)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'perihal' => 'required',
            'tanggal_kegiatan' => 'required',
            'tempat_kegiatan' => 'required',
            'pengirim' => 'required',
            'file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx',
        ]);
        $data = SuratMasuk::find($id);
        if ($request->hasFile('file')) {
            $request
                ->file('file')
                ->move('file/', $request->file->getClientOriginalName());
            $data->nomor_surat = $request->nomor_surat;
            $data->perihal = $request->perihal;
            $data->tanggal_kegiatan = $request->tanggal_kegiatan;
            $data->tempat_kegiatan = $request->tempat_kegiatan;
            $data->pengirim = $request->pengirim;
            $data->file = $request->file->getClientOriginalName();
            $data->save();
            return redirect('/suratmasuk')->with(
                'status',
                'Data Surat Masuk Berhasil Diubah'
            );
        }
        $data->update($request->all());
    }
    public function deletesuratmasuk($id)
    {
        $data = SuratMasuk::find($id);
        $data->delete();
        return redirect('/suratmasuk')->with(
            'status',
            'Data Surat Masuk Berhasil Dihapus'
        );
    }
}
