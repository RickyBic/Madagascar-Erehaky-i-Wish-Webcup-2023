<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;

class AbonnementController extends Controller
{
    public function index() {
        $abonnements = Abonnement::orderBy("nom", "asc")->paginate(5);
        return view("abonnement", compact("abonnements"));
    }
}
