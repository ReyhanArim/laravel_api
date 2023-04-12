<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return response()->json([
            'data' => $jabatan
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
        $jabatan = Jabatan::create([
            'nama' => $request->nama,
        ]);
        return response()->json([
            'data' => $jabatan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        return response()->json([
            'data' => $jabatan
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
    public function update(Request $request, Jabatan $jabatan)
    {
        $jabatan -> nama = $request->nama;
        $jabatan -> save();

        return response()->json([
            'data' => $jabatan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return response()->json([
            'message' => 'Jabatan delete'
        ], 204);
    }
}
