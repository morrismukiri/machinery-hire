<?php

use Illuminate\Database\Seeder;
use Faker;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker =Faker\Factory::create();
        
	    	DB::table('categories')->insert([
	            
	            'name' =>'None',
	            'description'=>'Has no parent',
	            'parent'=>0
	        ]);
	        DB::table('categories')->insert([
	            
	            'name' =>'Construction Equipment',
	            'description'
	        ]);
	    
    }
}
