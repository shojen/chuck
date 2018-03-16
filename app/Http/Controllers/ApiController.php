<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhraseRequest;
use App\Phrase;
use Illuminate\Http\Request;

class ApiController extends Controller
{
	/**
	* Devuelve una frase a través de la api
	*
	**/
    public function getPhrase()
    {
    	$phrase=Phrase::orderByRaw('RAND()')->pluck('phrase')->first();
    	return json_encode($phrase);
    }

    /**
    * Inserta una frase en la base de datos sólo para usuarios autenticados
    *
    **/
    public function setPhrase(PhraseRequest $request)
    {    		        

        if(Phrase::create(['phrase'=>$request->input('phrase')]))
        {
        	return response()->json(['status'=>'guardado correctamente'],200);
        }
        else
        {
        	return response()->json(['error'=>'Ha ocurrido un error al guardar',303]);
        }
	        
	    
    	
    }
}
