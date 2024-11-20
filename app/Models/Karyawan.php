<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Definisikan kolom yang boleh diisi massal
    protected $fillable = ['nama', 'posisi', 'nik', 'unit'];
}
