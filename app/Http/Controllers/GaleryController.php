<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $galery = Galery::all();
        return view('galery.index', compact(['galery']));
    }

    public function create()
    {
        return view('galery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $tempatSimpan = 'foto/';
            $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($tempatSimpan, $fotogambar);
            $input['gambar'] = "$fotogambar";
        }
        Galery::create($input);
        return redirect('/galery');
    }

    public function edit($id)
    {
        $galery = Galery::find($id);
        return view('galery.edit', compact(['galery']));
    }

    public function update($id, Request $request)
    {
        $galery = Galery::find($id);
        $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $tempatSimpan = 'foto/';
            $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($tempatSimpan, $fotogambar);
            $input['gambar'] = "$fotogambar";
        } else {
            unset($input['gambar']);
        }
        $galery->update($input);
        return redirect('/galery');
    }

    public function show($id)
    {
        $galery = Galery::find($id);
        return view('galery.show', compact(['galery']));
    }

    public function delete($id)
    {
        $galery = Galery::find($id);
        $galery->delete();
        return redirect('/galery');
    }
}
