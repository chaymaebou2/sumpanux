<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class apiController extends Controller
{
    //
    function getData()
    {
        return Categorie::all();
    }
}
