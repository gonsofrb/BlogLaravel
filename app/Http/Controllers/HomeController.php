<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{

    //método __invoke es para que el controlador administre una única ruta
    public function __invoke(){
        // return view('welcome');

    return view('home');
    }
}
