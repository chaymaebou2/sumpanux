<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    public function Formation() 
{ 
    return $this->hasMany(PLan::class); 
    return $this->hasMany(Formateur::class); 
    return $this->hasMany(FAQ::class); 
    return $this->hasMany(InscritNoregiste::class); 
    return $this->belongsTo(Categorie::class); 
}
 
   
}

