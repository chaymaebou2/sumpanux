<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public function Etudiant() 
    { 
        return $this->hasMany(CompteEtd::class);
        return $this->hasMany(FreeAnnual::class);
    }    
}
