<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Slider;

use App\Models\Categorie;

use App\Models\Produit;

use App\Models\Client;

class ClientController extends Controller
{
    public function home(){
        $sliders = Slider::where('statut',1)->get();
        $produits = Produit::where('statut',1)->get();
        return view('client.home')->with('sliders',$sliders)->with('produits',$produits);
    }

    /* home controller */

    public function apropos(){
        return view('client.apropos');
    }

     /* apropos controller */

    public function boutique(){
        $categories = Categorie::get();
        $produits = Produit::where('statut',1)->get();
        return view('client.boutique')->with('categories',$categories)->with('produits',$produits);
    }

     /* categorie controller */
     public function select_par_cat($name){
        $categories = Categorie::get();
        $produits = Produit::where('categorie_produit',$name)->where('statut',1)->get();
        return view ('client.boutique')->with('produits',$produits)->with('categories',$categories);
     }

    public function contact(){
        return view('client.contact');
    }

    /* contact controller */

    public function special(){
        return view('client.special');
    }

 /* special controller */

public function creer_compte(Request $request){
    $this->validate($request,['email'=>'email|required|unique:clients','password'=>'required|min:4']);
    $client = new Client();
    $client->email = $request->input('email');
    $client->password = bcrypt($request->input('password'));

    $client->save();
    return back()->with('statut','votre compte a été creer avec succes');
}
public function acceder_compte(Request $request)
{
    $this->validate($request,['email'=>'email|required','password'=>'required']);
    $client = Client::where('email',$request->input('email'))->first();
    if ($client) {
        if (Hash::check($request->input('password'),$client->password)) {
            Session::put('client',$client);
            return redirect('/boutique');
        }
        else{
            return back()->with('statut','mot de pass ou email incorrect');

        }
    }
    else{
        return back()->with('statut','vous n'."'".'avez pas de compte');
    }

}


 public function login(){
    return view('client.login');
}

  /* login controller */


   public function singnup(){
    return view('client.singnup');

     /* singup controller */
}


   public function paiement(){
    return view('client.paiement');

      /* singup controller */
}


}