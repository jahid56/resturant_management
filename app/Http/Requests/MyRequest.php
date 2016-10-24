<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MyRequest extends Request
{

    public function authorize()
    {
        return true;
    }
   
  public function rules()
{
    return [

        'username' => 'required',
        'password' => 'required'
    ];
}

 public function messages()
{
    return [
        

        'username.required'  => 'Username is required',
        'password.required'  => 'Password is required'
    ];
}
}