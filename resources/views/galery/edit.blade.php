@extends('layout.master')

@section('content')
<div class="container">
    <a href="/galery" class="btn btn-primary mt-3">Kembali</a>
    <form action="/galery/{{ $galery->idProduk }}" method="POST" enctype="multipart/form-data" class="mt-3">
        <h2>Input Data Produk</h2>
        @method('put')
        @csrf
        <div class="mb-3">
            <label>Judul Produk</label>
            <input type="text" name="judulProduk" value="{{ $galery->judulProduk }}" placeholder="Masukkan judul produk" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" value="{{ $galery->deskripsi }}" placeholder="Deskripsi produk" class="form-control">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" name="harga" value="{{ $galery->harga }}" placeholder="Harga produk" class="form-control">
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" value="{{ $galery->gambar }}" placeholder="Gambar produk" class="form-control" accept="image/*">
        </div>
        <input type="submit" name="submit" value="Simpan" class="btn btn-dark">
    </form>
</div>
@endsection