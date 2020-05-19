<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function show()
    {
        $authors = DB::table('authors')->get();

        return view('test', [
            'header'    => 'Meine Autoren',
            'authors'   => $authors,
        ]);
    }

    public function movies() {
        // gib mir eine view mit allen movie titeln aus
    }
}
