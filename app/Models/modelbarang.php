<?php

namespace App\Models;

use CodeIgniter\Model;

class modelbarang extends Model
{
    protected $table = "baju";
    protected $primaryKey = "id_barang";
    protected $allowedFields = ["namabarang", "deskripsi", "harga", "stok", "gambar"];
    protected $useTimestamps = false;
    protected $returnType = 'array';
}
