<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCafeRequest extends FormRequest
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
            'name'    => 'required',
            'address' => 'required',
            'city'    => 'required',
            'state'   => 'required',
            'zip'     => 'required|regex:/\b\d{5}\b/',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'A name is required',
            'address.required' => 'An address is required',
            'city.required'    => 'A city is required',
            'state.required'   => 'A state is required',
            'zip.required'     => 'A zip is required',
            'zip.regex'        => 'A valid zip is required',
        ];
    }
}
