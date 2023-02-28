@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="card text-center" style="width: 15rem;">
            <div class="card-header">{{ __('Produk') }}</div>
            <div class="card-body">
                <h1 class="card-title">{{ $galery }}</h1>
                <p class="card-text">Jumlah total produk.</p>
                <a href="/galery" class="btn btn-primary">Kelola produk</a>
            </div>
        </div>


        @endsection