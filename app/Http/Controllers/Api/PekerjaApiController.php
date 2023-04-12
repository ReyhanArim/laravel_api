<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pekerja;
use Illuminate\Http\Request;

class PekerjaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pekerja = Pekerja::all();
        $pekerja = Pekerja::with('jabatan', 'departemen') -> get();
        return response()->json([
            'data' => $pekerja
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pekerja = Pekerja::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'id_jabatan' => $request->id_jabatan,
            'id_departemen' => $request->id_departemen,
        ]);
        return response()->json([
            'data' => $pekerja
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($pekerja)
    {
        $pekerja = Pekerja::with('jabatan', 'departemen') -> where('id_jabatan', $pekerja) -> first();
        return response()->json([
            'data' => $pekerja
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pekerja $pekerja)
    {
        $pekerja -> nama = $request->nama;
        $pekerja -> save();

        return response()->json([
            'data' => $pekerja
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pekerja $pekerja)
    {
        $pekerja->delete();
        return response()->json([
            'message' => 'Pekerja delete'
        ], 204);
    }
}
