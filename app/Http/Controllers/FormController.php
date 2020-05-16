<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form() {
        $optionsAnrede = [
            'Herr'   => 'Herr',
            'Frau'   => 'Frau',
        ];
        $optionsRadio = [
            'male',
            'female',
        ];
        return view('form', compact('optionsAnrede','optionsRadio'));
    }

    public function send(Request $request) {
        dd($request->except('_token'));
    }
}
