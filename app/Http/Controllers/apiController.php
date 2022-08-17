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


    function Course()
    {   
        
        $formation = DB::table("formations")->join("formateurs","formations.IDFormateur","=","formateurs.IDFormateur")->select("id","nomCour","formateurs.formateur","formateurs.url_img_prof","prix","note","nbrH","nbrmax","urlbackground","descr")->get();
        $plan = DB::table("plans")->select("Titre","details")->get(); 
       $faq = DB::table("f_a_q_s")->select("Question","Reponse","isclicked")->get();

        
        return  response()::json(array(
            'formation' => $formation,
            'plan' => $plan,
            'faq' => $faq,
        ));
    }

    function DetailCourseConnect()
    {
       // $groupes = DB::table("groupes")->select("urlbackground","title","prof","prix","note","classe","heure",/*"desc",*/"groupes.date","groupes.lienwtsp","LoadingProgresse","hoursProgress","classProgress")->get();
        $members= DB::table("etudiants")->join("compte_etds","etudiants.IdCompte","=","compte_etds.IdCompte")->select( "Nom","compte_etds.Emailuser"/*,"Imageuser"*/)->get();
        $seance = DB::table("seances")->join("absenses","seances.Idabsence","=","absenses.Idabsence")->select("nomseance", "dateseance","absenses.precence","jourseance","color")->get();
        $cours = DB::table("tp_solutions")->select("nomcour","size")->get();
        $tp = DB::table("tp_solutions")->select("nomcour","size")->get();
        $solution = DB::table("tp_solutions")->select("nomcour","size")->get();
        $payement = DB::table("paiemment_etudiants")->select("date","prix","desc")->get();
          
        

        return response()::json(array(
        //'groupes' => $groupes,
        'members' => $members,
        'seance' => $seance,
        'cours' => $cours,
        'tp' => $tp,
        'solution' => $solution,
        'payement' => $payement,
        ));
    }

    function DetailCourse()
    {   
       // $groupes=DB::table("groupes")->select("urlbackground","title","prof","prix","note","classe","heure",/*"desc",*/"date","lienwtsp","LoadingProgresse","hoursProgress","classProgress")->get();
        $members = DB::table("etudiants")->join("compte_etds","etudiants.IdCompte","=","compte_etds.IdCompte")->select("Nom","compte_etds.Emailuser","Imageuser")->get(); 
        $seance = DB::table("seances")->select("nomseance","dateseance","jourseance")->get();
        $cours= DB::table("tp_solutions")->select("nomcour","size")->get();
        $tp= DB::table("tp_solutions")->select("nomcour","size")->get();
        $solution=DB::table("tp_solutions")->select("nomcour","size")->get();
        $payement=DB::table("paiement_profs")->select("date","prix","desc")->get();

        /*$members->each(function ($var ,$key)
        {
         if($var->etat==1)
         {
            
         } 
        });*/


        return  response()::json(array(
            //'groupes'=>$groupes,
            'members'=>$members, 
            'seance' => $seance,
            'cours' => $cours,
            'tp' => $tp,
            'solution'=>$solution,
            'payement'=>$payement,
        ));
    }


}


