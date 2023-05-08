<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function accueil() {
        $produits = Produit::orderBy("prix", "desc")->paginate(4);
        return view("index", compact("produits"));
    }

    public function accueiluser() {
        $produits = Produit::orderBy("prix", "desc")->paginate(4);
        return view("indexuser", compact("produits"));
    }

    public function details(Produit $produit) {
        return view("produitachat", compact("produit"));
    }

    public function buy(Produit $produit) {
        $produit->update([
            "quantite"=>$produit->quantite-1,
        ]);

        return view("produitachat", compact("produit"));
    }

    public function index() {
        $produits = Produit::orderBy("id", "asc")->paginate(5);
        return view("produit", compact("produits"));
    }

    public function create() {
        return view("createProduit");
    }

    public function edit(Produit $produit) {
        return view("editProduit", compact("produit"));
    }

    public function store(Request $request) {
        $request->validate([
            "titre"=>"required",
            "description"=>"required",
            "prix"=>"required",
            "quantite"=>"required",
            "image"=>"required",
        ]);

        // (optional) if $fillable exist in Produit : Produit::create($request->all());

        Produit::create([
            "titre"=>$request->titre,
            "description"=>$request->description,
            "prix"=>$request->prix,
            "quantite"=>$request->quantite,
            "image"=>$request->image
        ]);

        return back()->with("success", "Produit ajouté avec succès !");
    }

    public function update(Request $request, Produit $produit) {
        $request->validate([
            "titre"=>"required",
            "description"=>"required",
            "prix"=>"required",
            "quantite"=>"required",
            "image"=>"required",
        ]);

        $produit->update([
            "titre"=>$request->titre,
            "description"=>$request->description,
            "prix"=>$request->prix,
            "quantite"=>$request->quantite,
            "image"=>$request->image
        ]);

        return back()->with("success", "Produit modifié avec succès !");
    }

    public function delete(Produit $produit) {
        $produit->delete();
        return back()->with("successDelete", $produit->titre." supprimé avec succès !");
    }
}
