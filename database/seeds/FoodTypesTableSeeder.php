<?php

use Illuminate\Database\Seeder;

class FoodTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('foodtypes')->delete();
         
        DB::table('foodtypes')->insert(array(

        array('name'=>'Master Chef appetizer & starter',),
        array('name'=>'Master Chef exclusive appetizer & starter',),
        array('name'=>'Master Chef exclusive salad',),
        array('name'=>'Master Chef soup dishes',),
        array('name'=>'Master Chef exclusive soup dishes',),
        array('name'=>'Master Chef fried rice dishes',),
        array('name'=>'Master Chef Chinese chicken dishes',),
        array('name'=>'Master Chef exclusive-5',),
        array('name'=>'Master Chef Chinese beef dishes',),
        array('name'=>'Master Chef exclusive-2',),
        array('name'=>'Master Chef exclusive Chinese mutton dishes',),
        array('name'=>'Master Chef Chinese prawn dishes',),
        array('name'=>'Master Chef exclusive-4',),
        array('name'=>'Master Chef Chinese fish dishes',),
        array('name'=>'Master Chef exclusive-6',),
        array('name'=>'Master Chef chowmein/noodles dishes',),
        array('name'=>'Master Chef chopsuey dishes',),
        array('name'=>'Master Chef Chinese vegetable dishes',),
        array('name'=>'Master Chef Thai dishes',),
        array('name'=>'Master Chef exclusive-7',),
        array('name'=>'Master Chef sze-chuan dishes',),
        array('name'=>'Master Chef exclusive-3',),
        array('name'=>'Master Chef Indian Appetizer & starter dishes',),
        array('name'=>'Master Chef Indian polau & biriany dishes',),
        array('name'=>'Nan roti',),
        array('name'=>'Indian vegetable dishes',),
        array('name'=>'Indian chicken dishes',),
        array('name'=>'Indian beef dishes',),
        array('name'=>'Indian mutton dishes',),
        array('name'=>'Master Chef Indian prawn dishes',),
        array('name'=>'Master Chef Indian fish dishes',),
        array('name'=>'Master Chef Indian dishes from tondoori oven',),
        array('name'=>'Master Chef Bangla dishes',),
        array('name'=>'Master Chef Fast food/Snacks',),
        array('name'=>'Master Chef Desert',),
        array('name'=>'Master Chef Beverage',)

          ));

      }
}
