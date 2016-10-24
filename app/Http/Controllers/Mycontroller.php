<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use App\Http\Requests\CustomerRequest;
use Session;
use App\Http\Requests\MyRequest;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ReservationRequest;

use App\Admin;
use DB;
use Input;
use Auth;
use Validator;
use Redirect;



class Mycontroller extends Controller
{
    public function typeadd(){

        $all=Input::all();

     $in=DB::table('foodtypes')->insert(['name' => $all['type'] ]);

        if($in==true){
            Session::flash('status', 'Data added successfully!');
        } else {
           Session::flash('status', 'Date addition unsuccessful!'); 
        } 
         return redirect()->intended('addtype');
    }

    public function received(){

      $get=DB::table('contact')->where('status','=','0')->orderby('c_time','desc')->get();
        return view('feedback')->with(compact('get'));
    }

    public function rece($id){
       $get=DB::table('contact')->where('id','=',$id)->get();
       return view ('feedbackdetails')->with(compact('get'));
    }

    public function ok(){
       $all=Input::all();
        
        $in=DB::table('contact')->where(['id'=>$all['id']])->update(['status' => $all['status'] ]);
        return Redirect::to('received');
    }

    public function deletefood($id){

      $del=DB::table('foods')->where('id', '=', $id)->delete();

        if($del==true){
            Session::flash('status', 'Data delete was successful!');
        } else {
           Session::flash('status', 'Date delete was unsuccessful!'); 
        } 
         return redirect()->intended('fooding');
    }
    public function res(){
       $t = time();
        $date = date("Y-m-d H:i:s", $t);
       
        
        $get=DB::table('reserve')->where('when','>',$date)->orderby('when','desc')->take(5)->get();
        return view('showreserve')->with(compact('get'));
    }
    public function addtype(){
      $types=DB::select('select * from foodtypes');

         return view('type')->with(compact('types'));
    }

    public function addfood(){

      $types=DB::select('select * from foodtypes');

      return view('addfood')->with(compact('types'));
    }

    public function foodadd(){
         $all=Input::all();

     $in=DB::table('foods')->insert([
    ['name' => $all['name'], 'type_id' => $all['type'] ,'price' => $all['price']]
            ]);

     if($in==true){
            Session::flash('status', 'Data added successfully!');
        } else {
           Session::flash('status', 'Date addition unsuccessful!'); 
        } 
         return redirect()->intended('fooding');
    }

    public function formenu(){
    	//$all=DB::table('food')->select('id','type','name','price')->orderBy('id', 'asc')->get();
    	$lists=DB::select('select * from foodtypes');
    	//print_r($all);
    	return view('menu')->with(compact('lists'));
    }

    public function reserve(ReservationRequest $request){
      $send=$request->all(); 
      $rand=rand(1000,9999);
     //print_r($send);
    $in=DB::table('reserve')->insert( ['name' => $send['name'],'ref' => $rand ,'email' =>$send['email'] ,'size' =>$send['party'] , 'mobile' =>$send['mobile'] , 'when' =>$send['time']  ]  );
    if($in=true){
          Session::flash('alert-success', 'Data update was successful!');
        } else {
           Session::flash('alert-danger', 'Date update was unsuccessful!'); 
        }
    return view('reservation');
  
    }

    public function newedit($id){

        
        $food=DB::select('select * from foods where id = :id', ['id' => $id]);

        $list=DB::select('select * from foodtypes');

        return view('foodediting')->with(compact('food','list'));
    }
    public function transaction(){
    	
       // print_r($request->rules());
       // DELETE FROM delivery WHERE time <NOW() - INTERVAL 1 MINUTE AND paid=0
       
        return view('trans');
        // }

    }
    public function message(ContactRequest $request){

     $send=$request->all(); 
     //print_r($send);
    
     

    $sql=DB::insert('insert into contact (name, email, phone, message) values (?, ?, ?, ?)', [ $send['name'],$send['email'],$send['phone'],$send['message']]);
     $request->session()->flash('alert-success', 'Thank you for your feedback, we will get back to you soon');
       return redirect()->intended('contact');
    }

    public function info(){
      $user = Auth::user();
           
      return view('page')->with(compact('user'));
    }
    
    public function order(){
      //=DB::table('trans')->where('t_id','!=','0' ,'and','d_time','>','NOW()')->orderby('d_time')->get();
      $all=DB::select('select * from trans where d_time >NOW() order by d_time');

      return view('showorder')->with(compact('all'));
    } 

    public function report(){
      //=DB::table('trans')->where('t_id','!=','0' ,'and','d_time','>','NOW()')->orderby('d_time')->get();
      $all=DB::select('select * from trans where d_time <NOW() order by d_time');

      return view('showreport')->with(compact('all'));
    }
    
    public function fooding(){

      $sql=DB::select('select * from foods');
      $tql=DB::select('select * from foodtypes');

      return view('fooding')->with(compact('sql','tql'));
    }
    public function updatefood(){
      
      $all=Input::all();
        print_r($all);
        $in=DB::table('foods')
            ->where('id', $all['id'])
            ->update(['name' => $all['fname'],'type_id'=> $all['type'], 'price' => $all['fprice']]);

        if($in=true){
          Session::flash('status', 'Data update was successful!');
        } else {
           Session::flash('status', 'Date update was unsuccessful!'); 
        }
        return redirect()->intended('fooding');
    }
   
    public function stuff(){

      $all=DB::table('stuff')->select('*')->orderBy('id', 'asc')->get();
      
      return view('listofstuff')->with(compact('all'));
    }
   

                // $username=$request->input('username');
            // $username=admin;
            // $find = Admin::find($username);
            // echo $find;
           //  $find=DB::select('select id from admins where username = :username', ['username' => $request->input('username')]);
           //  foreach ($find as $value) {
           //    $v=$value->id;
           //  }

           //  $ses = array( 'username'=>$request->input('username'),
           //      'logged_in'=>true,  'user_id' => $v
           //      );
           // // 
           //  $request->session()->put('key', $ses);

    public function login(MyRequest $request){ 

      if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
           $user = Auth::user();
           $a=$user->username;
           return  redirect()->intended('dashboard');
        }  else {
        return Redirect::to('admin')->withErrors(array('need' => 'Invalid Username or Password'))->withInput(Input::except('password'));
        }
    // if($auth){  
    //     
    // } else 
    // return Redirect::to('d')->withErrors(array('need' => 'Invalid Username or Password'))->withInput(Input::except('password'));
    
     }

    public function about(){

      $ab=DB::select('select type,name,mobile from stuff');

  
      return view('about')->with(compact('ab'));
    }
    
    public function atlast(CustomerRequest $request){
    
      $total=0;
    $lo=input::all();
  
    $value=$lo['no'];
    $AyeD=$lo['ids'];
    $tp=$lo['types'];
    if($lo['delivery']=='home'){
      $total=$total+30;
    }
   for ($i=1; $i <=sizeof($tp); $i++) { 
      
   DB::table('orderedfood')->insert( ['ref_id' => $lo['ref'] ,'food_id' =>$AyeD[$i] ,'type_id' =>$tp[$i] , 'how_many' => $value[$AyeD[$i]] ]  );
    }
    foreach ($lo['ids'] as $key) {
     $dam=DB::table('foods')->select('price')->where('id', $key)->first();
   
     $total=$total+$dam->price*$value[$key];
     }  
     DB::table('trans')->insert(['name' => $lo['name'] ,'t_id' =>0 ,'ref_id' => $lo['ref'] ,'address' =>$lo['add'] ,'mobile' =>$lo['mobile'] , 'd_type' => $lo['delivery'], 'd_time' =>$lo['time'], 'bill' => $total]  );
     $lo['pir']=$total;
   return view('trans')->with('last',$lo);
    
    }

    public function sale(){
    	$input=Input::all();
        $rules=array(
            'hidId' =>"required"
            );
             $messages = [
            'required' => '<----Please select some items',
                ];

          $validator = Validator::make($input, $rules, $messages);
         if($validator->fails()){

            return Redirect::back()->withErrors($validator);
        }
        else{
       $i=1;
       $ok['i']=$_POST['hidId'];
       $now=explode(",", $ok['i']);
       $ok['p']=$_POST['hidPrice'];
       $rand=rand(1000,9999);
       $ok['r']=$rand;
       
      $into=DB::insert('insert into delivery (f_list, ref_id ) values (?, ?)', [$ok['i'], $rand ]);
       foreach ($now as $value) {
          $out[$i]=DB::select('select id,name,price,type_id from foods where id = :id', ['id' => $value]);
          $i++;
       }
       return view('paying')->with(compact('out','ok'));

    }}

    // public function va(){
    //     $in=Input::all();
    //     print_r($in);
    //     $rules=array(
    //         'de' =>"required"
    //         );

    //     $vali=Validator::make($in,$rules);

    //     if($vali->fails()){
    //         return redirect('home')->withErrors($vali);
    //     }
    //     else echo "ok";
    // }
   
}
