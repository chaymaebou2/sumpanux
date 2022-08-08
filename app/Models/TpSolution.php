<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpSolution extends Model
{
    use HasFactory;
    public function TpSolution()
    { 
        return $this->belongsTo(Groupe::class); 
    }
}
