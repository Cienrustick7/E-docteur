<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretaires extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_sec',
        'prenom_sec',
        'email',
        'password '
    ];
}
