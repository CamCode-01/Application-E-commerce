<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ajouterproduit(){
        $categories = Categorie::all()->pluck('nom_categorie','nom_categorie');
        return view('admin.ajouterproduit')->with('categories',$categories);
    }

    public function sauverproduit(Request $request){
        $this->validate($request,['nom_produit'=>'required|unique:produits',
                                 'categorie_produit' => 'required',
                                'prix_produit'=>'required',
                                'image_produit'=>'image|nullable|max:1999']);

                if ($request->hasfile('image_produit')) {
                    $fileNameWithExt = $request->file('image_produit')->getClientOriginalName();

                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                    $extension = $request->file('image_produit')->getClientOriginalExtension();

                    $fileNameToStore = $fileName.'_'.time().'.'.$extension;

                    $path = $request->file('image_produit')->storeAs('public/image_produit',$fileNameToStore);
                }
                else{
                    $fileNameToStore = 'noimage.jpg';
                }
                $produit = new Produit();
                $produit->nom_produit=$request->input('nom_produit');
                $produit->prix_produit=$request->input('prix_produit');
                $produit->categorie_produit=$request->input('categorie_produit');
                $produit->image_produit=$fileNameToStore;
                $produit->statut=1;

                $produit->save();

                return redirect('/ajouterproduit')->with('statut', 'Le produit '.$produit->nom_produit.' a été inséré avec succès!');

     }


    public function produits(){
        $produits = Produit::get();
        return view('admin.produits')->with('produits',$produits);
    }
}
