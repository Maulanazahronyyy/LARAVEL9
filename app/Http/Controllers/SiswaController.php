<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswas.index', [

            'siswas' => Siswa::get(),
        ]);
    }
    public function create()
    {
        return view('siswas.create');
    }

    public function store(Request $request)
    {
        $siswa = new Siswa();

        $siswa->nama = $request->nama;

        $siswa->kelas = $request->kelas;

        $siswa->alamat = $request->alamat;

        $siswa->nis = $request->nis;

        $siswa->save();

        return redirect()->route('siswas.index'); 
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);

       return view('siswas.edit', [

        'siswa' => $siswa,
        
       ]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);

        $siswa->nama = $request->nama;

        $siswa->kelas = $request->kelas;

        $siswa->alamat = $request->alamat;

        $siswa->nis = $request->nis;

        $siswa->save();

        return redirect()->route('siswas.index'); 
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        $siswa->delete();

        return redirect()->route('siswas.index'); 
    }
}
