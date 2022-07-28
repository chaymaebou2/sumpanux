<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscriNoregiste extends Model
{
    use HasFactory;
    public function InscriNoregiste()
{ 
    return $this->belongsTo(Formation::class); 
}
}
