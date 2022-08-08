<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiemmentEtudiant extends Model
{
    use HasFactory;
    public function PaiemmentEtudiant()
    { 
        return $this->belongsTo(Etudier::class); 
    }
}
