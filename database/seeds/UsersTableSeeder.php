<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if(User::where('email','chuck@norris.es')->count()==0)
    	{
	        User::create([
	        		'username'	=>'chuck',
	        		'email'	=>'chuck@norris.es',
	        		'password'=>bcrypt('No_Necesito'),
	        	]);
    	}
    }
}
