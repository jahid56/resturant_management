<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'message' => 'required',
        ];
    }

    public function messages()
    {
    return [
        
        'name.required'  => 'Your Name is required',
        'phone.required'  => 'Your phone is required',
        'email.required'  => 'Your email is required',
        'message.required'  => "Message field can't be empty",

        ];
    }
}
