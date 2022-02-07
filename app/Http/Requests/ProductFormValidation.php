<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class ProductFormValidation extends FormRequest
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
            'product_name' => 'required|string|unique:products,product_name',
            'product_code' => 'required|string|unique:products,product_code',
            'brand_id'     => 'required|integer',
            'category_id'  => 'required|integer',
            'price'        => 'required|numeric|min:1',
            'qty'          => 'required|numeric|min:1',
            'min_qty'      => 'required|numeric|min:1',
            'max_qty'      => 'required|numeric|gt:min_qty',
            'image'        => 'nullable|image|mimes:png,jpeg,jpg,svg'
        ];
    }

    public function messages()
    {
        return [
            'brand_id.required'     => 'The brand field is required.',
            'categorty_id.required' => 'The category field is required.',
            'qty.required'          => 'The quantity field is required.',
            'qty.numeric'           => 'The quantity must be a number.',
            'qty.min'               => 'The quantity must be at least 1.',
            'min_qty.required'      => 'The minimum quantity field is required.',
            'min_qty.numeric'       => 'The minimum quantity must be a number.',
            'min_qty.min'           => 'The minimum quantity must be at least 1.',
            'max_qty.required'      => 'The maximum quantity field is required.',
            'max_qty.numeric'       => 'The maximum quantity must be a number.',
            'max_qty.gt'            => 'The maximum quantity must be greater than minimum quantity.'
        ];
    }
}
