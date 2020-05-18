<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show() {
        $header = 'Meine Überschrift';
        return view('example', compact('header'));
    }
}
