<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('pegawais')->get();
        return view('home', compact('pegawai'));
    }

    public function create()
    {
        return view('tambahPegawai');
    }

    public function store(Request $request)
    {
        DB::table('pegawais')->insert([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'gaji'   => $request->gaji,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('home')->with('success', 'Pegawai berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $pegawai = DB::table('pegawais')->where('id', $id)->first();

        return view('editPegawai', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        DB::table('pegawais')->where('id', $id)->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'gaji' => $request->gaji,
            'updated_at' => now(),
        ]);

        return redirect()->route('home')->with('success', 'Data pegawai berhasil diupdate!');
    }

    public function destroy($id)
    {
        DB::table('pegawais')->where('id', $id)->delete();

        return redirect()->route('home')->with('success', 'Pegawai berhasil dihapus!');
    }
}
