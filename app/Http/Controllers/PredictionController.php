<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PredictionController extends Controller
{
    public function prediction() {
        session_start();
        $utilisateur = unserialize($_SESSION['user']);
        //echo $utilisateur->nom;
        return view('predictions',compact("utilisateur"));
    } 

    public function predire() {
        if(isset($_FILES['avatar']))
        {
            $extension =  $_FILES['avatar']['type'];
            if(Str::contains($extension,'octet-stream'))
            {
                $dossier = 'assets/dream/';
                $fichier = basename($_FILES['avatar']['name']);
                $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si
                {
                    echo 'Upload effectué avec succès !';
                }
                else 
                {
                    echo 'Echec de l\'upload !';
                }
            }
            else{
                echo "erreur de fichier passe";
            }
        }
        return back()->with("success", "true");
    } 
}
