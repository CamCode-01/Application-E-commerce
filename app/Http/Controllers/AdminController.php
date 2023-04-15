<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
              /* singup controller */

    public function dashboard(){
        return view('admin.dashboard');

    }
}