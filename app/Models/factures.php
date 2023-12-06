<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factures extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'date',
        'tarif_cns',
        'nom_pat',
        'prenom_pat',

    ];
}
