<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class Restoran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nama_restoran',
        'alamat_restoran',
        'Harga','Lokasi','Menu',
        'Pelayanan','Jarak'
    ];

    protected $table = "restorans";
}
