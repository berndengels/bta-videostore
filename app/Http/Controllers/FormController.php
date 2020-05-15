<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        $msg = 'Bitte alle Felder ausfüllen!';

        $formData = [
            'fullname' => ['name' => 'name', 'value' => 'Julian Weimer', 'msg' => $msg],
            'message' => ['name' => 'nachricht', 'value' => 'Eine Nachricht', 'msg' => $msg],
            'email' => ['name' => 'email', 'value' => 'julian.weimer@posteo.de', 'msg' => $msg],
            'birthday' => ['name' => 'geburtstag', 'value' => '1990-26-03', 'msg' => $msg],
            'alarm' => ['name' => 'weckzeit', 'value' => '09:00', 'msg' => $msg],
            'cities' => ['name' => 'städte', 'value' => '0', 'options' => ['Berlin', 'Hamburg', 'München'], 'msg' => $msg],
            'colors' => ['name' => 'farben', 'options' => ['Blau', 'Rot', 'Grün'], 'msg' => $msg],
            'shapes' => ['name' => 'formen', 'options' => ['Quadrat', 'Kreis', 'Dreieck'], 'msg' => $msg]
        ];

        return view('beispiel_formular', $formData);
    }
}
