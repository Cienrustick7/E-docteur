<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\specialités;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Docteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_doc',
        'prenom_doc',
        'adresse ',
        'telephone ',
        'email ',
    ];


    function specialités(){
        return $this->belongsTo(specialités::class, 'specialites_id');
       }
       function Docteur(){
        return $this->belongsTo(Docteur::class, 'docteurs_id');
       }
}
