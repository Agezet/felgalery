@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Produk') }}</div>
                <div class="card-body" style="overflow: auto;">
                    <a href="/galery/tambah" class="btn btn-primary mt-2">Tambah Produk</a>
                    <table class="table table-hover mt-2">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th width="280px">Action</th>
                        </tr>

                        @php $no = 1; @endphp
                        @foreach ($galery as $g)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ asset('foto/' . $g->gambar) }}" width="100px"></td>
                            <td>{{ $g->judulProduk }}</td>
                            <td>{{ $g->deskripsi }}</td>
                            <td>{{ $g->harga }}</td>
                            <td>

                                <form action="/galery/{{ $g->idProduk }}" method="POST">
                                    <a class="btn btn-warning mt-2" href="/galery/{{ $g->idProduk }}/edit">Edit</a>
                                    <a class="btn btn-info mt-2" href="/galery/{{ $g->idProduk }}/show">Show</a>
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Apakah anda ingin menghapus produk?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection