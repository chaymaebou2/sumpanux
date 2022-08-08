<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompteEtd extends Model
{
    use HasFactory;
    public function CompteEtd()
    { 
        return $this->belongsTo(Etudiant::class); 
    }
}
