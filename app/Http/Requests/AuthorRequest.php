<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required'     => 'Bitte einen Vornamen angeben!',
            'lastname.required'     => 'Bitte einen Nachnamen angeben!',
        ];
    }
}
