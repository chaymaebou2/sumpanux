<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    public function Application()
    {
        return $this->hasMany(Evenement::class);
        return $this->hasMany(ImageConverture::class);
    }
}
