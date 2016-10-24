<?php

use Illuminate\Database\Seeder;

class StuffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stuff')->delete();

         DB::table('stuff')->insert(array(
         array('type'=>'Chef','name'=>'kasham','mobile'=>'0178544678674'),
        array('type'=>'Chef','name'=>'hasham','mobile'=>'0178544678674'),
        array('type'=>'Chef','name'=>'Kalam','mobile'=>'0178544678674'),
        array('type'=>'Waiter','name'=>'Spice Potato','mobile'=>'0178544678674')
         	));
    }
}
