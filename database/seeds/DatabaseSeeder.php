<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(FoodTableSeeder::class);
         $this->call(StuffTableSeeder::class);
         $this->call(FoodTypesTableSeeder::class);	
         $this->call(AdminTableSeeder::class);
    }
 
}