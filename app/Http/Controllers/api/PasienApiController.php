<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienApiController extends Controller
{
    public function index()
    {
        return response()->json(Pasien::all(), 200);
    }

    public function show($id)
    {
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($pasien, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tgl_lahir' => 'required|date'
        ]);

        $pasien = Pasien::create($request->all());

        return response()->json([
            'message' => 'Data berhasil ditambahkan!',
            'data' => $pasien
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        $pasien->update($request->all());

        return response()->json([
            'message' => 'Data berhasil diupdate!',
            'data' => $pasien
        ], 200);
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        $pasien->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus!'
        ], 200);
    }
}
