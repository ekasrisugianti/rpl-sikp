<?php

namespace App\Http\Controllers;

use App\Models\DaftarBimbingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarBimbinganController extends Controller
{
    public function getAllDaftarBimbingan()
    {
        $daftarbimbingan = DaftarBimbingan::all();
        return view('DaftarBimbingan.index', compact('daftarbimbingan'));
    }

    public function vCreateDaftarBimbingan()
    {
        return view('DaftarBimbingan.create');
    }

    public function vEditDaftarBimbingan($id)
    {
        $daftarbimbingan = DaftarBimbingan::find($id);
        return view('DaftarBimbingan.edit', compact('daftarbimbingan'));
    }

    public function createDaftarBimbingan(Request $request)
    {
        JadwalUjian::create([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Judul' => $request->Judul,
            'Lembaga' => $request->Lembaga,
            'PengajuanUjianKP' => $request->PengajuanUjianKP,
        ]);

        return redirect('/dosen/daftarbimbingan')->with('success', 'Berhasil menambahkan data');
    }

    public function editDaftarBimbingan($id, Request $request)
    {
        $daftarbimbingan = DaftarBimbingan::find($id);
        DB::table('daftar_bimbingans')->where('id', $id)->update([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Judul' => $request->Judul,
            'Lembaga' => $request->Lembaga,
            'PengajuanUjianKP' => $request->PengajuanUjianKP,
        ]);

        return redirect('/dosen/daftarbimbingan')->with('success', 'Berhasil mengubah data');
    }

    public function deleteDaftarBimbingan($id)
    {
        $daftarbimbingan = DaftarBimbingan::find($id);
        $daftarbimbingan->delete();
        return redirect('/dosen/daftarbimbingan')->with('success', 'Berhasil menghapus data');
    }
}
