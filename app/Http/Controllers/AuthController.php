<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Coach;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request){

        $utilisateurs = new Utilisateur();
        $utilisateurs->nom = $request->name;
        $utilisateurs->prenom = $request->lastname;
        $utilisateurs->email = $request->email;
        $utilisateurs->fonction = $request->input('fonction');
        $utilisateurs->password = Hash::make($request->pwd);

        $utilisateurs->save();

        if($request->input('fonction') === 'cli'){
            $clients = new Client();
            $clients->nom_client = $request->name;
            $clients->prenom_client = $request->lastname;
            $clients->adresse_client = $request->adresse;
            $clients->email_client = $request->email;

            $clients->save();

            return redirect()->intended(route('admin.main'));
        }

        else{
            $coaches = new Coach();
            $coaches->nom = $request->name;
            $coaches->prenom = $request->lastname;
            $coaches->age = $request->age;
            $coaches->sexe = $request->sexe;

            $coaches->save();
        }



    }
}
