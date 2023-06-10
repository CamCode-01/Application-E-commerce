<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Commande;

class AdminController extends Controller
{
              /* singup controller */

    public function dashboard(){
        return view('admin.dashboard');

    }

    public function commandes(){
        $commandes = Commande::get();
        return view('admin.commandes')->with('commandes',$commandes);

    }
}