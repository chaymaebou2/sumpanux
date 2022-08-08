<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    use HasFactory;
    public function Jour()
    { 
        return $this->belongsTo(Groupe::class); 
    }
}
