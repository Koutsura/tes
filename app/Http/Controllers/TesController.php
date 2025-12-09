<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;

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
        Pasien::create($request->all());
        
        return redirect('/tes');
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->update($request->all());
        return redirect('/tes');
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/tes');
    }
    //
}
