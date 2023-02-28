<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::paginate(10);
        Log::info('GET method apiProduk success called.');
        return response()->json([
            'data' => $produk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = Produk::create([
            'judulProduk' => $request->judulProduk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
        ]);
        Log::info('POST method createProduk success called.');
        return response()->json([
            'data' => $produk,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        Log::info('GET method detailProduk success called.');
        return response()->json([
            'data' => $produk,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Produk $produk)
    public function update($id, Request $request)
    {
        $produk = Produk::find($id);
        $produk->judulProduk = $request->judulProduk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->gambar = $request->gambar;
        $produk->save();
        Log::info('PUT method updateProduk success called.');
        return response()->json([
            'data' => $produk,
            'status' => 'update sukses'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Produk $produk)
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        Log::info('DELETE method deleteProduk success called.');
        return response()->json([
            'status' => 'hapus sukses',
        ]);
    }
}
