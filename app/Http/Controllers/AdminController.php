<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\Coach;
use App\Models\Exercice;
use App\Models\Horaire;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){

        return view('admin.viewAdmin');
    }


    public function adminCoach(){

        $response['coaches']=Coach::all();
        return view('admin.viewAdminCoach')->with($response);

    }

    public function adminCoachPost(Request $request){

        $coaches = new Coach();
        $coaches->nom = $request->firstName;
        $coaches->prenom = $request->lastName;
        $coaches->age = $request->age;
        $coaches->sexe = $request->sexe;

        $coaches->save();

        $horaire = new Horaire();
        $horaire->Jour = $request->jour;
        $horaire->heure_debut = $request->heurD;
        $horaire->heure_fin = $request->heurF;

        $horaire->save();
        return to_route('admin.viewAdminCoach')->with('success','Coach ajouté');
    }

    public function destroyCoach(string $id){

        $coaches = Coach::find($id);
        $coaches ->delete();
        return redirect('admin.viewAdminCoach');
    }



    public function adminClient(){

        $response['coaches']=Coach::all();
        return view('admin.viewAdminClient')->with($response);

    }

    public function equipement(){

        $response['coaches']=Coach::all();
        return view('admin.viewequipement')->with($response);

    }

    public function exercices(){
        $response['exercices']=Exercice::all();
        return view('admin.viewExercices')->with($response);
    }

    public function exercicesPost(Request $request){
        $exercice = new Exercice();

        $exercice->nomExercice = $request->nomE;

        $exercice->save();

        return to_route('admin.viewExercices')->with('success','Exercice ajouté');

    }

    public function abonnement(){
        $abonnements =Abonnement::all();
        $exercices = Exercice::all();


        return view('admin.viewAbonnement' ,compact('abonnements','exercices'));
    }

    public function abonnementPost(Request $request){

        $abonnements = new Abonnement();

        $abonnements->nom_abonnement = $request->nomA;
        $abonnements->prix = $request->prix;
        $abonnements->description = $request->descA;
        $abonnements->durée = $request->duree;

        $abonnements->save();

        foreach ($request->input('exer') as $key => $exer){
            $x = 0;
            $exercice = new Exercice();
            $exercice->nomExercice = $request->input('exer')[$x];
            $exercice->save();
        }

        return to_route('admin.viewAbonnement')->with('success','Abonnement ajouté');



    }


    public function client(){

        return to_route('client.viewClient')->with('success',' Enregistrement reuissi');
    }

    public function coach(){

        return to_route('coach.viewCoach')->with('success',' Enregistrement reuissi');
    }
}
