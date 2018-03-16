<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phrase;

class FrontController extends Controller
{
	/**
	* Muestra una frase aleatoria en la página de bienvenida
	*
	**/
    public function index()
    {
    	$phrase=Phrase::orderByRaw('RAND()')->first();
    	return view('welcome')->with(compact('phrase'));
    }
}
