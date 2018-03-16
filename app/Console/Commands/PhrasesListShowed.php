<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Phrase;

class PhrasesListShowed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'listar:vistos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lista las frases que ya han sido vistas en la home';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $phrases=Phrase::where('show',true)->get();
        $this->line("\r\n");
        $this->comment('**** Comienza las frases vistas en la Home ****');
        foreach ($phrases as $phrase) {
            $this->line($phrase->phrase);
        }
        $this->comment('**** Fin de las frases vistas en la Home ****');
    }
}
