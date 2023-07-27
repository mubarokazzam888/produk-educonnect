<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    // use HasFactory;
    protected $table = 'profile__agen';
    protected $fillable = [
        'first_name',
        'last_name',
        'NIK',
        'date_of_birth',
        'no_rek',
        'phone_number',
        'address',
        'role',
    ];
}
