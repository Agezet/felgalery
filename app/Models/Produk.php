<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'galery';
    protected $primaryKey = 'idProduk';
    protected $fillable = ['judulProduk', 'deskripsi', 'harga', 'gambar'];
}
