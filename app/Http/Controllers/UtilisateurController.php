<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\Produit;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UtilisateurController extends Controller
{
    public function index() {
        $utilisateurs = Utilisateur::orderBy("nom", "asc")->paginate(5);
        return view("utilisateur", compact("utilisateurs"));
    }

    function login(Request $request) {
        session_start();
        $user = Utilisateur::select('*')->where('email','=',$request->email)->where('motdepasse','=',$request->motdepasse)->get();
        if(count($user)!=0) {
            if($user[0]->admin==1) {
                return view("welcome");
            }
            $_SESSION['user'] = serialize($user[0]);
            $produits = Produit::orderBy("prix", "desc")->paginate(4);
            return view("indexuser", compact("produits"));
        } else {
            return back()->with("error", "Email ou mot de passe incorrect.");
        }
    }

    function signup(Request $request) {
        $motdepasse = $request->motdepasse;
        $motdepasseconfirm = $request->motdepasseconfirm;
        if($motdepasse!=$motdepasseconfirm) {
            return back()->with("error", "Mot de passe incorrect.");
        }
        Utilisateur::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'datenaissance'=>$request->datenaissance,
            'sexe'=>$request->sexe,
            'motdepasse'=>$request->motdepasse,
            'photoprofil'=>"default.png",
            'abonnement_id'=>1,
            'admin'=>0
        ]);
        return view('login');
    }

    function updatepdp(Request $request) {
        session_start();
        if(isset($_FILES['avatar']))
        {
            $extension =  $_FILES['avatar']['type'];
            if(Str::contains($extension,['jpg','jpeg','png','gfif','gif']))
            {
                $dossier = 'assets/upload/';
                $fichier = basename($_FILES['avatar']['name']);
                $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si
                {
                    $utilisateur = unserialize($_SESSION['user']);
                    $utilisateur->update([
                        "photoprofil"=>$fichier
                    ]);
                    return back()->with("success","Votre photo de profil a été changé avec succes");
                }
                else 
                {
                    return back()->with("erreur","Echec de l'upload");
                }
            }
            else{
                return back()->with("erreur","Le fichier doit être une photo");
            }
        }
        else{
            return back()->with("erreur","Veuillez ajouter un fichier");
        }
    }

    function changeAbonnement(Abonnement $abonnement) {
        session_start();
        $utilisateur = unserialize($_SESSION['user']);
        $utilisateur->update([
            "abonnement_id"=>$abonnement->id
            ]);

        $_SESSION["user"] = serialize($utilisateur);
    }

    function deconnexion() {
        session_start();
        session_destroy();
    }
}
