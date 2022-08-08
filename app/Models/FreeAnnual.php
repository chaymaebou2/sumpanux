<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeAnnual extends Model
{
    use HasFactory;
    public function FreeAnnual()
    { 
        return $this->belongsTo(Etudiant::class); 
    }
}
