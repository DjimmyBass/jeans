<?php

namespace App\Http\Controllers\Coif;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function bienvenue(){
        return view('bienvenue');
    }

    public function enregistrement(){
        return view('auth.register');
    }

    public  function register(){
        return view('auth.register');
    }
}

