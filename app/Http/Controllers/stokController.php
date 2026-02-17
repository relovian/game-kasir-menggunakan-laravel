<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::all();

        return view('barang', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahBarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama_barang' => 'required|min:3',
                'stok_masuk' => 'required',
                'harga' => 'required',
            ]
        );

        $barang = barang::create([
            'nama_barang' => $validated['nama_barang'],
            'stok_masuk' => $validated['stok_masuk'],
            'total_stok' => $request->stok_masuk,
            'harga' => $validated['harga']
        ]);

        return redirect()->route('stok.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = barang::findOrFail($id);
        return view('editBarang', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $barang = barang::findOrFail($id);

        $validated = $request->validate(
            [
                'nama_barang' => 'required|min:3',
                'stok_masuk' => 'required',
                'harga' => 'required',
            ]
        );

        barang::where('id', $id)->update([
            'nama_barang' => $validated['nama_barang'],
            'stok_masuk' => $validated['stok_masuk'],
            'harga' => $validated['harga'],
            'total_stok' => $validated['stok_masuk'] - $barang->stok_keluar
        ]);

        return redirect()->route('stok.index')->with('success', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('stok.index')->with('success', 'data berhasil di hapus');
    }
}
