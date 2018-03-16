<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhraseRequest;
use App\Phrase;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
    * Pagina todas las frases
    *
    **/
    public function index()
    {
    	$phrases=Phrase::paginate(10);
    	return view('dashboard.index')->with(compact('phrases'));
    }

    /**
    * Muestra el formulario para crear una nueva frase
    *
    **/
    public function create()
    {
    	return view('dashboard.create');
    }

    /**
    * Guarda la nueva frase y notifica el estado
    *
    **/
    public function store(PhraseRequest $request)
    {  
    	if(Phrase::create(['phrase'=>$request->input('phrase')]))
    	{
    		notify()->flash('Se ha guardado correctamente.','success',['title'=>'Felicidades!!','timer'=>3000]);
    		return redirect()->action('DashboardController@index');
    	}

    	notify()->flash('Ocurrió un error al guardar','error',['title'=>'Ups!!','timer'=>3000]);
    	return back()->withInput();
    }

    /**
    * Muestra el formulario para editar una frase
    *
    **/
    public function edit(Phrase $phrase)
    {
    	return view('dashboard.edit')->with(compact('phrase'));
    }

    /**
    * Actualiza una frase
    *
    **/
    public function update(Phrase $phrase, PhraseRequest $request)
    {
    	$phrase->phrase=$request->input('phrase');
    	if($phrase->save())
    	{
    		notify()->flash('Se ha guardado correctamente.','success',['title'=>'Felicidades!!','timer'=>3000]);
    		return redirect()->action('DashboardController@index');
    	}
    	notify()->flash('Ocurrió un error al guardar','error',['title'=>'Ups!!','timer'=>3000]);
        return redirect()->action('DashboardController@edit',$phrase->id)->withInput();
    }

    /**
    * Elimina una frase
    *
    **/
    public function destroy(Phrase $phrase)
    {
    	
    	return ($phrase->delete())?'ok':'';
    }


}
