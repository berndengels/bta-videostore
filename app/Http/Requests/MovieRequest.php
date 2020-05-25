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
            'author_id' => 'required',
            'title'     => 'required',
            'price'     => 'required|numeric',
            'created_at' => '',
            'updated_at' => '',
        ];
    }

    /**
     * Get the validation messages that apply to the rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'author_id.required' => 'Bitte einen Autor auswählen!',
            'title.required'     => 'Bitte einen Titel angeben!',
            'price.required'     => 'Bitte einen Preis angeben!',
            'price.numeric'      => 'Der Preis muß numerisch sein!',
        ];
    }
}
