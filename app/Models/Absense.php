<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absense extends Model
{
    use HasFactory;
    public function Absense()
    { 
        return $this->belongsTo(Seance::class); 
    }
}
