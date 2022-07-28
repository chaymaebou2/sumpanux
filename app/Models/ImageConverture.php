<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageConverture extends Model
{
    use HasFactory;
    public function ImageConverture()
{ 
    return $this->belongsTo(Application::class); 
}
}
