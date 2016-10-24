<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function () { 
 return view('home');
  }]);
 
Route::get('home', ['as' => 'home', function () {
  return view('home')
  ;}]);
 
Route::get('admin', ['as' => 'admin' , function(){

    if (Auth::check()) {
    return Redirect::to('dashboard');
    } 
    else return view('ad');
    }]);

Route::post('new', ['as' => 'login','uses' =>'Mycontroller@login']);

Route::group([ 'middleware' => 'admin'], function() {
 
Route::get('dashboard',['as' => 'dashboard','uses' =>'Mycontroller@info'] );

Route::get('order', ['as' => 'order','uses' =>'Mycontroller@order']);

Route::get('report', ['as' => 'report','uses' =>'Mycontroller@report']);

Route::get('fooding', ['as' => 'fooding','uses' =>'Mycontroller@fooding']);

Route::get('editfood/{id}',['as' => 'editfood','uses' =>'Mycontroller@newedit']);

Route::post('foodedit',['as' => 'editfood','uses' =>'Mycontroller@updatefood']);

Route::get('addfood',['as' => 'addfood','uses' =>'Mycontroller@addfood']);

Route::post('foodadd',['as' => 'foodadd','uses' =>'Mycontroller@foodadd']);

Route::get('addtype',['as' => 'addtype','uses' =>'Mycontroller@addtype']);

Route::post('typeadd',['as' => 'typeadd','uses' =>'Mycontroller@typeadd']);

Route::get('deletefood/{id}',['as' => 'deletefood','uses' =>'Mycontroller@deletefood']);

Route::get('res',['as' => 'res','uses' =>'Mycontroller@res']);

Route::get('stuff', ['as' => 'stuff','uses' =>'Mycontroller@stuff']);

Route::get('received',['as' => 'received','uses' =>'Mycontroller@received']);

Route::get('rece/{id}', ['as' => 'rece','uses' =>'Mycontroller@rece']);

});

Route::post('ok',['as' => 'ok','uses' =>'Mycontroller@ok']);

Route::get('logout', ['as' => 'logout', function(){
	Auth::logout();
	return view('ad');
}]);

Route::get('contact', ['as' => 'contact', function () {
    return view('contact');
}]);

Route::get('reservation',['as' => 'reservation', function () {
    return view('reservation');
}]);

Route::post('booking', ['as' => 'booking','uses' =>'Mycontroller@reserve']);

Route::get('about', ['as' => 'about','uses' =>'Mycontroller@about']);

Route::get('menu', ['as' => 'menu','uses' =>'Mycontroller@formenu'] );

Route::post('buying', ['as' => 'buying','uses' =>'Mycontroller@sale']);

Route::post('send', ['as' => 'send','uses' =>'Mycontroller@message']);

Route::post('final', ['as' => 'final','uses' =>'Mycontroller@atlast'] );
