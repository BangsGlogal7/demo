<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class sessionController extends Controller
{
    function create() {
        return view('auth.login');
    }
    function store() {

        //valider les données

        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //tentative de connexion

        if (! Auth::attempt($attributes) )  {

            throw ValidationException::withMessages([
                'email' => 'Vos identifiants sont incorrects'
            ]);

        }

        //Genérer un token de session

        request()->session()->regenerate();

        //redirection

        return redirect('/jobs');
    }
    function destroy() {
        Auth::logout();

        return redirect('/');
    }
}
