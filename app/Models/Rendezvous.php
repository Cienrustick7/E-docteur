<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Docteur;
class Rendezvous extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'telephone ',
        'date',
        'heure ',
        'departement',
        'message',
    ];

    public function Docteur()
    {
        return $this->belongsTo(Docteur::class);
    }
}
