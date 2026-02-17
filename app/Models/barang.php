<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public $table = 'barang';
    protected $fillable = ['nama_barang', 'stok_masuk', 'stok_keluar', 'total_stok', 'harga'];
}
