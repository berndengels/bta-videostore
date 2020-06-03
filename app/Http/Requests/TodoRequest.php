<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class TodoRequest extends FormRequest
{
    /**
     * @var null Validator
     */
    public $validator = null;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function validationData()
    {
        return array_merge([
            'done'  => false,
        ], $this->all());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'done'  => '',
        ];
    }

    /**
     * Get the validation messages that apply to the rules.
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'    => 'Bitte einen Titel angeben!',
            'title.min'         => 'Der Titel muss mindestens 3 Zeichen lang sein!',
        ];
    }
}
