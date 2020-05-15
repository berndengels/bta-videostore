<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form() {
        $data = [
            [
                'name'  => 'anrede',
                'type'  => 'select',
                'value' => 'Herr',
                'options'   => [
                    'Herr'   => 'Herr',
                    'Frau'   => 'Frau',
                ],
            ],
            [
                'name'  => 'name',
                'type'  => 'text',
                'value' => 'Paul Meier',
            ],
            [
                'name'  => 'email',
                'type'  => 'email',
                'value' => 'engels@goldenacker.de',
            ],
            [
                'name'  => 'geburtstag',
                'type'  => 'date',
                'value' => '1968-04-13',
            ],
            [
                'name'  => 'uhrzeit',
                'type'  => 'time',
                'value' => '19:00',
            ],
            [
                'name'  => 'nachricht',
                'type'  => 'textarea',
                'value' => 'Lorem ipsum und so weiter ...',
            ],
            [
                'name'  => 'AGB-akzeptiert',
                'type'  => 'checkbox',
                'value' => true,
            ],
            [
                'name'  => 'gender',
                'type'  => 'radio',
                'value' => 'male',
                'checked' => true,
            ],
            [
                'name'  => 'gender',
                'type'  => 'radio',
                'value' => 'female',
                'checked' => false,
            ],
        ];
        return view('form', compact('data'));
    }

    public function send(Request $request) {
        $rules = [
            'anrede'            => 'required',
            'name'              => 'required',
            'email'             => 'required|email',
            'geburtstag'        => 'required',
            'uhrzeit'           => '',
            'nachricht'         => '',
            'AGB-akzeptiert'    => 'required',
            'gender'            => 'required',
        ];
        $messages = [
            'anrede.required'   => 'Bitte die Anrede angeben!',
            'name.required'     => 'Bitte einen Namen angeben!',
            'email.required'    => 'Bitte eine Email-Adresse angeben!',
            'email.email'       => 'Bitte eine gültige Email-Adresse angeben!',
            'geburtstag.required'       => 'Bitte Ihr Geburtsdatum angeben!',
            'AGB-akzeptiert.required'   => 'Bitte AGB akzeptieren!',
            'gender.required'           => 'Bitte Geschlecht angeben!',
        ];
        $validated = $request->validate($rules, $messages);
        dd($validated);
    }
}
