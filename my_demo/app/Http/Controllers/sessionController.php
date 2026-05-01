<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    function create() {
        return view('auth.login');
    }
    function store() {
        return view('auth.login');
    }
}
