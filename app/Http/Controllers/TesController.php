<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class TesController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view('index', compact('pasien'));
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required|string|max:255',
        'tgl_lahir' => 'required|date',
    ]);

     $pasien= new Pasien();
        $pasien->nama= $request['nama'];
        $pasien->tgl_lahir= $request['tgl_lahir'];
        $pasien->save();
        return redirect('/tes')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
    $pasien = Pasien::findOrFail($id);
    return view('edit', compact('pasien'));
    }


    public function update(Request $request, $id)
    {
    $request->validate([
        'nama' => 'required|string|max:255',
        'tgl_lahir' => 'required|date'
    ]);

    $pasien = Pasien::findOrFail($id);
    $pasien->update([
        'nama' => $request->nama,
        'tgl_lahir' => $request->tgl_lahir,
    ]);

    return redirect('/tes')->with('success', 'Data berhasil diupdate!');
    }


    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/tes')->with('success', 'Data berhasil dihapus!');
    }
    //
}
