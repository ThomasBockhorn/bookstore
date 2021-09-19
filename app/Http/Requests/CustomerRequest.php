<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'First Name' => 'required|string|max:255',
            'Last Name' => 'required|string|max:255',
            'Address Line 1' => 'required|string|max:255',
            'Address Line 2' => 'required|string|max:255',
            'State' => 'required|string',
            'Zipcode' => 'required|string',
            'Phone Number' => 'required|string',
            'Email' => 'string',
            'Status' => 'boolean',
            'Past Due' => 'boolean'
        ];
    }
}