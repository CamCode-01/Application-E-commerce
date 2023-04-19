<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function ajoutercategorie(){
        return view('admin.ajoutercategorie');
    }

    public function sauvercategorie(Request $request){
        $this->validate($request, ['nom_categorie' => 'required']);

        $categorie = new Categorie();

        $categorie->nom_categorie = $request->input('nom_categorie');
        $categorie->save();

        return redirect('/ajoutercategorie')->with('statut', 'La categorie '. $categorie->nom_categorie.' à été ajouté avec succès');

    }
    public function categories(){
        $categories = Categorie::get();
        return view('admin.categories')->with('categories',$categories);
    }

    public function editer_categorie($id){
        $categorie =  Categorie::find($id);

        return view('admin.editer_categorie')->with('categorie',$categorie);
    }
}