<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'First Name' => 'required|string|alpha|max:255',
            'Last Name' => 'required|string|alpha|max:255',
            'Comment' => 'required',
            'Stars' => 'required|numeric',
            'Book_ID' => 'required|numeric'
        ];
    }
}