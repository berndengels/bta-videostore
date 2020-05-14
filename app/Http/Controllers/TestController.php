<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $liste = ['Hans','Ina','Paul'];

        return view('test', [
            'header' => 'Meine Test Page',
            'liste' => $liste
        ]);
    }
}
