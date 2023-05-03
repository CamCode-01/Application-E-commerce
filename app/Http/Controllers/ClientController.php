<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;

class ClientController extends Controller
{
    public function home(){
        $sliders = Slider::where('statut',1)->get();
        return view('client.home')->with('sliders',$sliders);
    }

    /* home controller */

    public function apropos(){
        return view('client.apropos');
    }

     /* apropos controller */

    public function boutique(){
        return view('client.boutique');
    }

     /* categorie controller */

    public function contact(){
        return view('client.contact');
    }

    /* contact controller */

    public function special(){
        return view('client.special');
    }

 /* special controller */


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