@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Produk') }}</div>

                <div class="card-body">
                    <div class="container">
                        <a class="btn btn-dark" href="/galery">Kembali</a>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Judul Produk:</strong>
                                <p>{{ $galery->judulProduk }}</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Deskripsi:</strong>
                                <p>{{ $galery->deskripsi }}</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Harga:</strong>
                                <p>{{ $galery->harga }}</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                            <div class="form-group">
                                <strong>Gambar:</strong>
                                <div class="mt-2">
                                    <img src="{{ asset('foto/' . $galery->gambar) }}" width="500px" style="border-style: dashed;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection