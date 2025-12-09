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
        return view('create');
    }
    
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('edit');
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->update($request->all());
        return view('index');
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return view('create');
    }
    //
}
