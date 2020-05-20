<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return (bool) Auth::user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'author_id' => 'required',
            'title'     => 'required',
            'price'     => 'required',
            'created_at' => '',
            'updated_at' => '',
        ];
    }

    public function messages()
    {
        return [
            'author_id.required' => 'Bitte einen Autor auswählen!',
            'title.required'     => 'Bitte einen Titel angeben!',
            'price.required'     => 'Bitte einen Preis angeben!',
        ];
    }
}
