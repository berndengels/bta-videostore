<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
class TestController extends Controller
{
    public function show() {
        return view('test'), ['message' =>]
    }
}
*/

class TestController extends Controller
{
    public function show()
    {

        $liste = ['Hans' , 'Tamas', 'Ervin' ];
        return view('test', [
            'header' => 'Meine Test Page Header-böl' ,
            'liste' => $liste
        ]);
    }
}
