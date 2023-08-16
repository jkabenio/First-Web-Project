<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostsRequest extends FormRequest
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
       $rules = [
           'municipality' => [
               'required',

           ],
           'title' => [

        ],
            'body' => [
                'required'
        ],
            'cover_image' => [
                'nullable',
                'max:1999'

            ],
        ];
        return $rules;
    }
}
