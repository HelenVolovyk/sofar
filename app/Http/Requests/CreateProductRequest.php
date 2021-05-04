<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'SKU.required' => 'SKU is required',
            'SKU.unique' => 'Product SKU should be unique',
            'SKU.max' => 'SKU should be less than 200',
            'name.required' => 'Name is required',
            'name.unique' => 'Product name should be unique',
            'shot_description.required' => 'Length of shot description should be more than 10 characters',
            'shot_description.max' => 'Max length of shot description should be less than 200',
            'price.required' => 'Price is required',
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
            'SKU' => 'required|min:1|max:25|unique:products',
            'name' => 'required|min:2|max:150|unique:products',
            'shot_description' => 'required|min:10',
           // 'thumbnail' => 'required|image',
           // 'product_images.*' => 'image'


        ];
    }
}