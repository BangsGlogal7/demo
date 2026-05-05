<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RegisteredUserController extends Controller
{
    function create() {
        return view('auth.register');
    }

    function store() {

       // valider les données
        $attributes = request()->validate([
            'last_name' => ['required'],
            'first_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);


    

       // créer un utilisateur
       $user = User::create($attributes);

       // connecter l'utilisateur
        Auth::login($user);

       // rediriger l'utilisateur
        return redirect('/jobs');
    }
    
}
