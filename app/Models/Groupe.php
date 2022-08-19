<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    public function Groupe() 
    { 
        return $this->hasMany(Jour::class);
        return $this->hasMany(TpSolution::class);
        return $this->hasMany(InscritEtudiant::class);
        return $this->hasMany(paiement_prof::class);
    }     
}
