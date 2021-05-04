<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
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

	 public function messages()
    {
        return [
          
            'name.required' 		=> 'Name is required',
            'email.required' 		=> 'Email is required',
            'subject.required' 	=> 'Subject is required',
            'message.required' 	=> 'Message is required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		return [
			'name' 		=> ['string', 'max:255'],
			'email' 		=> ['string', 'email', 'max:255'],
			'subject'	=> ['required', 'string', 'min:5', 'max:50'],
			'message' 	=> ['required', 'string',  'min:15','max:255'],
		
		 
	  ];
 
    }
}
