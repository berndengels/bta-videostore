<?php
// app/Http/Request/AuthorRequest.php
namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|alpha',
            'lastname'  => 'required|alpha',
        ];
    }

    /**
     * Get the validation messages that apply to the rules.
     * @return array
     */
    public function messages()
    {
        return [
            'firstname.required'    => 'Bitte einen Vornamen angeben!',
            'firstname.alpha'       => 'Der Vornamen darf nur aus Buchstaben bestehen!',
            'lastname.required'     => 'Bitte einen Nachnamen angeben!',
            'lastname.alpha'        => 'Der Nachnamen darf nur aus Buchstaben bestehen!',
        ];
    }
}
