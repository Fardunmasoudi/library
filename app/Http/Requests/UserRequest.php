<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'         => 'required|alpha|max:20',
            'lastname'     => 'required|alpha|max:30',
            'nationalcode' => 'required|alpha|max:20',
            'mobile'       => 'required|alpha|numeric|max:11',
            'username'     => 'required|max:20',
            'password'     => 'required|alpha|min:6',
            'addres'       => 'required|max:100',
        ];
    }
}
