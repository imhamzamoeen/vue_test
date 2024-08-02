<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Http\FormRequest;
class UpdatebooksRequest extends FormRequest
{
    use AuthorizesRequests {
        authorize as check;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->check('delete', $this->post);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>['required','unique:books,title'.request()->route('book')->id],
            'description'=>['required','string'],
            'price'=>['required','numeric'],
            'quantity'=>['required','numeric'],,
            'author_id'=>['required','numeric','exists:users,id'],
        ];
    }
}
