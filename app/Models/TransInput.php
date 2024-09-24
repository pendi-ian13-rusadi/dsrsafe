<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransInput extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial_number',
        'jenis_radio',
        'aktivitas_awal',
        'tanggal_produksi',
        'aktivitas_saat_ini',
        'waktu_paruh_sumber',
        'perkiraan_waktu_habis',
        'layak_reuse',
        'status_saat_ini',
    ];
}
