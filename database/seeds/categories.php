<?php

use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create();
        
	    	DB::table('courses')->insert([
	            
	            'name' =>'Farm Tools'
	        ]);
	        DB::table('courses')->insert([
	            
	            'name' =>'Construction Equipment'
	        ]);
	    
    }
}
