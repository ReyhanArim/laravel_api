<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departemen = Departemen::all();
        return response()->json([
            'data' => $departemen
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
        $departemen = Departemen::create([
            'nama' => $request->nama,
        ]);
        return response()->json([
            'data' => $departemen
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Departemen $departemen)
    {
        return response()->json([
            'data' => $departemen
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
    public function update(Request $request, Departemen $departemen)
    {
        $departemen -> nama = $request->nama;
        $departemen -> save();

        return response()->json([
            'data' => $departemen
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departemen $departemen)
    {
        $departemen->delete();
        return response()->json([
            'message' => 'Departemen delete'
        ], 204);
    }
}
