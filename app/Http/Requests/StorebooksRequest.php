<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorebooksRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>['required','unique:books,title'],
            'description'=>['required','string'],
            'price'=>['required','numeric'],
            'quantity'=>['required','numeric'],,
            'author_id'=>['required','numeric','exists:users,id'],
        ];
    }
}
