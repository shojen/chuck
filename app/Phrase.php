<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{

    protected $fillable=['phrase'];
	
	/*
	* Actualiza el estado de show la frase
	*
	*/
    public function getCheckedPhraseAttribute()
    {
    	if($this->show==false)
    	{
    		$this->show=true;
    		$this->save();
    	}

    	return $this->phrase;

    }
}
