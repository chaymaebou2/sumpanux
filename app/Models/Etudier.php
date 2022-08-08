<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Etudier extends Model
{
    use HasFactory;
    public function Etudier() 
    { 
        return $this->hasMany(PaiemmentEtudiant::class);
    }
}
