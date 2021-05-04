<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRecipeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }


	 public function messages()
    {
        return [
            'title.required' => 'title is required',
           
            
            'description.required' => 'Description is required',
           
            'shot_description.required' => 'Length of shot description should be more than 10 characters',
            
            'components.required' => 'Components is required',
            'thumbnail.required' => 'Thumbnail is required'
           

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
				'title' => 'required|min:2|max:150',
            'description' => 'required|min:10',
            'shot_description' => 'required|min:10',
           // 'thumbnail' => 'required|image',
           // 'product_images.*' => 'image'


      
        ];
    }
}