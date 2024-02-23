<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\Coach;
use App\Models\Exercice;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function about(){

        return view('acceuil.about');
    }

    public function classes(){

        return view('acceuil.classes');
    }

    public function contact(){

        return view('acceuil.contact');
    }

    public function welcome(){

        $abonnements =Abonnement::all();
        $exercices = Exercice::all();
        $coaches = Coach::all();


        return view('welcome' ,compact('abonnements','coaches'));

        return view('welcome');
    }


}
