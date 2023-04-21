<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ajouterproduit(){
        $categories = Categorie::all()->pluck('nom_categorie','nom_categorie');
        return view('admin.ajouterproduit')->with('categories',$categories);
    }

    public function sauverproduit(Request $request){
        $this->validate($request,['categorie_produit' => 'required']);
        print($request->input('categorie_produit'));
    }


    public function produits(){
        return view('admin.produits');
    }
}