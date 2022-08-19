<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiementProf extends Model
{
    use HasFactory;
    public function PaiementProf()
    { 
        return $this->belongsTo(Groupe::class); 
    }
}
