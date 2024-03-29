<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'=>'required|min:3|max:250',
            'author'=>'required|min:3|max:250',
            'file'=>'required',
            'isbn'=>'required|digits:12',
            'image'=>'required|image|dimensions:min_width=100|min_height=200',
            'price'=>'required',
        ];
    }
}
