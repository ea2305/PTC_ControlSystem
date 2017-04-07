<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function access(Request $request) {
        
    	//Realizar validacion de usuarios
    	//Creación de sesión

        return view('home');
    }
}
