<?php

use Illuminate\Database\Seeder;
use App\Phrase;

class PhrasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        $phrases=[
        	'1.200 millones de chinos están furiosos con Chuck Norris. Parece una pelea justa',
        	'Chuck Norris olvidó una vez dónde dejó sus llaves. Se torturó durante una hora hasta que se obligó a decirlo.',
        	'Chuck Norris duerme con una pistola bajo la almohada, pero podría matarte solo con la almohada.',
        	'El calendario de Chuck Norris pasa del 27 de Diciembre al 29 de Diciembre. Nadie bromea con Chuck Norris.',
        	'Chuck Norris llamó Presidente al Vicepresidente. Entonces Chuck Norris mató al Presidente. Chuck Norris nunca se equivoca.',
        	'Cuando Google no encuentra algo, le pide ayuda a Chuck Norris.',
        	'En un examen de matemáticas, cuando Chuck Norris era joven, puso en todas las respuestas -violencia-. Porque Chuck Norris resuelve todoslos problemas con violencia.',
        	'En un examen de matemáticas, cuando Chuck Norris era joven, puso en todas las respuestas -violencia-. Porque Chuck Norris resuelve todoslos problemas con violencia.',
        	'Chuck Norris eliminó la tecla Escape del teclado de su ordenador. No le gusta salir huyendo de los problemas.',
        	'Rodeado de terroristas, con los brazos atados a la espalda, enmedio de gas lacrimógeno y herido de bala, Chuck Norris se ríe y dice:los tengo a todos justo donde quería.',
        	'Chuck Norris es la razón por la que Wally se esconde.',
        	'Teoría de la Energía: la energía ni se crea ni se destruye, excepto si se encuentra con Chuck Norris.',
        	'Ley de la gravedad: todo cuerpo atrae a otro cuerpo en la medida en que a Chuck Norris le interese.',
        	'Ley de la Esperanza de Vida: todo ser vivo que se encuentre al otrolado del puño de Chuck Norris habrá llegado al fin de su vida.',
        	'Ley de la termodinámica: cuanto más se caliente a Chuck Norris, más lejos llegarán los cadáveres.',

        ];

        foreach ($phrases as $phrase) {
        	Phrase::create(['phrase'=>$phrase]);
        }
    }
}
