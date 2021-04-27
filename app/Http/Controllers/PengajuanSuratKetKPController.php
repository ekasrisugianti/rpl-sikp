<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSuratKetKP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengajuanSuratKetKPController extends Controller
{
    public function getAllPengajuanSuratKetKP()
    {
        $pengajuansuratketkp = PengajuanSuratKetKP::all();
        return view('PengajuanSuratKetKP.index', compact('pengajuansuratketkp'));
    }

    public function vCreatePengajuanSuratKetKP()
    {
        return view('PengajuanSuratKetKP.create');
    }

    public function vEditPengajuanSuratKetKP($id)
    {
        $pengajuansuratketkp = PengajuanSuratKetKP::find($id);
        return view('PengajuanSuratKetKP.edit', compact('pengajuansuratketkp'));
    }

    public function createPengajuanSuratKetKP(Request $request)
    {
        PengajuanSuratKetKP::create([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'NIM' => $request->NIM,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'noTelp' => $request->noTelp,
            'alamat' => $request->alamat,
            'fax' => $request->fax,
            'dokumen' => $request->dokumen,
            'statusverfikasi' => $request->statusverfikasi,
        ]);

        return redirect('/mahasiswa/pengajuansuratketkp')->with('success', 'Berhasil menambahkan data');
    }

    public function editPengajuanSuratKetKP($id, Request $request)
    {
        $PengajuanSuratKetKP = PengajuanSuratKetKP::find($id);
        DB::table('surat_kps')->where('id', $id)->update([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'NIM' => $request->NIM,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'noTelp' => $request->noTelp,
            'alamat' => $request->alamat,
            'fax' => $request->fax,
            'dokumen' => $request->dokumen,
            'statusverfikasi' => $request->statusverfikasi,
        ]);

        return redirect('/mahasiswa/PengajuanSuratKetKP')->with('success', 'Berhasil mengubah data');
    }

    public function deletePengajuanSuratKetKP($id)
    {
        $pengajuansuratketkp = PengajuanSuratKetKP::find($id);
        $pengajuansuratketkp->delete();
        return redirect('/mahasiswa/pengajuansuratketkp')->with('success', 'Berhasil menghapus data');
    }
}
    