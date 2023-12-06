<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialités extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_spec',

    ];

    function Docteur(){
        return $this->hasOne(Docteur::class);
}
}
