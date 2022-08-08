<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Evenement;
use App\Models\Formation;
use App\Models\ImageConverture;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Response;

class apiController extends Controller
{
    //  
    function getData()
    {   
        $Pub = DB::table("image_convertures")->select("id","urlbackground")->get();
        $Categorie = DB::table("formations")->join("categories","formations.urlbackground","=","categories.urlbackground")->select("categories.id","formations.urlbackground","categories.nomCategorie")->get();
        $NewCour = DB::table("formations")->select("id","nomCour","Prix","nbrH","urlbackground")->get();
        $BestCour = DB::table("formations")->select("id","nomCour","Prix","nbrH","urlbackground")->get();
        $Event = DB::table("evenements")->select("id","urlbackground","text")->get();
        
        return  response()::json(array(
            'Pub' => $Pub,
            'Categorie' => $Categorie,
            'NewCour' => $NewCour,
            'BestCour'=> $BestCour,
            'Event' => $Event,
        ));
    }

    function jsonData()
    {   
        
        $formation = DB::table("formations")->join("formateurs","formations.IDFormateur","=","formateurs.IDFormateur")->select("id","nomCour","formateurs.formateur","formateurs.url_img_prof","prix","nbrH","nbrmax","urlbackground")->get();
        $plan = DB::table("plans")->select("Titre","details")->get(); 
       $faq = DB::table("f_a_q_s")->select("Question","Reponse")->get();

        
        return  response()::json(array(
            'formation' => $formation,
            'plan' => $plan,
            'faq' => $faq,
        ));
    }


}


