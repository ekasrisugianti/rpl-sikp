<?php

namespace App\Http\Controllers;

use App\Models\JadwalUjian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalUjianController extends Controller
{
    public function getAllJadwalUjian()
    {
        $jadwalujian = JadwalUjian::all();
        return view('JadwalUjian.index', compact('jadwalujian'));
    }

    public function vCreateJadwalUjian()
    {
        return view('JadwalUjian.create');
    }

    public function vEditJadwalUjian($id)
    {
        $jadwalujian = JadwalUjian::find($id);
        return view('JadwalUjian.edit', compact('jadwalujian'));
    }

    public function createJadwalUjian(Request $request)
    {
        JadwalUjian::create([
            'jadwal' => $request->jadwalUjian,
            'ruangan' => $request->ruanganUjian,
            'dosen_penguji' => $request->dosenPenguji,
        ]);

        return redirect('/dosen/jadwalujian')->with('success', 'Berhasil menambahkan data');
    }

    public function editJadwalUjian($id, Request $request)
    {
        $jadwalujian = JadwalUjian::find($id);
        DB::table('jadwal_ujians')->where('id', $id)->update([
            'jadwal' => $request->$jadwalUjian,
            'ruangan' => $request->ruanganUjian,
            'dosen_penguji' => $request->dosenPenguji,
        ]);

        return redirect('/dosen/jadwalujian')->with('success', 'Berhasil mengubah data');
    }

    public function deleteJadwalUjian($id)
    {
        $jadwalujian = JadwalUjian::find($id);
        $jadwalujian->delete();
        return redirect('/dosen/jadwalujian')->with('success', 'Berhasil menghapus data');
    }
}
    