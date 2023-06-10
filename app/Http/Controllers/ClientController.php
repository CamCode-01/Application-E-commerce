<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Slider;

use App\Models\Categorie;

use App\Models\Produit;

use App\Models\Client;

use Illuminate\Support\Facades\Session;

use App\Cart;

use Illuminate\Support\Facades\Redirect;

use Stripe\Charge;

use Stripe\Stripe;

use App\Models\Commande;


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

     public function ajouter_au_panier($id){
        $produit = Produit::find($id);

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($produit, $id);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return redirect('/boutique');
     }

     public function cart(){
        if(!Session::has('cart')){
            return view('client.cart');
        }

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);

        return view('client.cart', ['produits' => $cart->items]);

     }

     public function modifier_panier(Request $request, $id){
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($request->id, $request->quantity);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return redirect::to('/cart');
     }

     public function retirer_produit($id){
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }

        //dd(Session::get('cart'));
        return redirect::to('/cart');

     }


     public function paiement(){
        if(!Session::has('cart')){
            return view('client.cart');
        }
        return view('client.paiement');

          /* singup controller */
    }
    public function payer(Request $request){
        if(!Session::has('cart')){
            return view('client.cart');
        }
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        Stripe::setApiKey('sk_test_51N9HIxGlubtAU4vNq61jMIJAMNFZsEVGoF3jC4t3kDsd6h3MavdB2fzIz85ffkI22NVmdfJESzg8IA9gpq3qHl1O00lCzQtix8');

        try{

            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "fcfa",
                "source" => $request->input('stripeToken'), // obtainded with Stripe.js
                "description" => "Test Charge"
            ));

            $commandes = new Commande;
            $commandes->nom = $request->input('name');
            $commandes->adresse =$request->input('address');
            $commandes->panier = serialize($cart);
            $commandes->payment_id = $charge->id;

            $commandes->save();


        } catch(\Exception $e){
            Session::put('error', $e->getMessage());
            return redirect('/paiement');
        }

        Session::forget('cart');
        // Session::put('success', 'Purchase accomplished successfully !');
        return redirect('/cart')->with('status','Achat validé avec succès');

    }



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
public function logout(){
    Session::forget('client');
    return back();
}


 public function login(){
    return view('client.login');
}

  /* login controller */


   public function singnup(){
    return view('client.singnup');

     /* singup controller */
}





}