<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calon_mhs extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_telp_calon_mhs',
        'no_telp_orang_tua',
        // 'kode_referral',
    ];
}
