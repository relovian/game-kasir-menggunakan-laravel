<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\dompet;
use Illuminate\Http\Request;

class dompetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dompet = dompet::all();
        $barang = barang::all()->shuffle()->toArray();

        return view('index', compact('dompet'), compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mejaKasir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = barang::where('id', $request->id)->first();

        if ($barang->nama_barang == $request->nama_barang) {

            $total_harga = $request->harga * $request->jumlah;


                dompet::create([
                    'kas' => $total_harga,
                    'created_at' => now()
                ]);

                barang::where('id', $barang->id)->increment('stok_keluar', $request->jumlah);
                barang::where('id', $barang->id)->decrement('total_stok', $request->jumlah);
        
                return redirect('/');
        } else {

            return redirect()->route('meja.kasir', [
                'harga' => $barang->harga,
                'total_harga' => $request->total_harga,
                'id' => $barang->id
            ])->with('error', 'pastikan data sudah benar yaw')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
