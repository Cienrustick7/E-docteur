<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'date_naiss',
        'sexe',
        'adresse',
        'telephone '
    ];
}
