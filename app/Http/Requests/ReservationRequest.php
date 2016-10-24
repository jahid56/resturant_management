<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReservationRequest extends Request
{
    
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            
        'name' => 'required',
        'mobile' => 'required',
        'email' => 'required',
        'time' => 'required',
        'party' => 'required',

        ];
    }

     public function messages()
    {
        return [
            
        'required' => 'This field has to be filled'
        
        ];
    }
}
