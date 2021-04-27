<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getAllDashboard()
    {
        $dashboard = Dashboard::all();
        return view('Dashboard.index', compact('dashboard'));
    }

    public function vCreateDashboard()
    {
        return view('Dashboard.create');
    }

    public function vEditDashboard($id)
    {
        $dashboard = Dashboard::find($id);
        return view('Dashboard.edit', compact('dashboard'));
    }

    public function createDashboard(Request $request)
    {
        Dashboard::create([
            'DOSEN' => $request->DOSEN,
            'MAHASISWA' => $request->MAHASISWA,
            'MATAKULIAH' => $request->MATAKULIAH,
          
        ]);

        return redirect('/dashboard/Dashboard')->with('success', 'Berhasil menambahkan data');
    }
}
    // public function editDashboard($id, Request $request)
    // {
    //     $dashboard = Dashboard::find($id);
    //     DB::table('dashboard')->where('id', $id)->update([
    //         'DOSEN' => $request->DOSEN,
    //         'MAHASISWA' => $request->MAHASISWA,
    //         'MATAKULIAH' => $request->MATAKULIAH,
        
    //     ]);

    //     return redirect('/dosen/dashboard')->with('success', 'Berhasil mengubah data');
    // }

//     public function deleteDafftarBimbingan($id)
//     {
//         $daftarbimbingan = DaftarBimbingan::find($id);
//         $daftarbimbingan->delete();
//         return redirect('/dosen/daftarbimbingan')->with('success', 'Berhasil menghapus data');
//     }
// }
