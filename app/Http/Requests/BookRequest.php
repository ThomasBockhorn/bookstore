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
            'Title' => 'required|string',
            'Author First Name' => 'required|string|alpha|max:255',
            'Author Last Name' => 'required|string|alpha|max:255',
            'Category' => 'required|string|alpha|max:255',
            'Description' => 'required',
            'Price' => 'required|numeric',
            'On Sale' => 'required|boolean',
            'Sale Price' => 'numeric',
            'book_sale_start_date' => 'date',
            'book_sale_end_date' => 'date',
            'Image' => 'string'
        ];
    }
}