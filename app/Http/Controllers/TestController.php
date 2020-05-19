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

    public function movies()
    {
        // gib mir eine view mit alles movie titeln aus
        $movies = DB::table('movies')->get();

        return view('movies', [
            'header' => 'Alle Filme',
            'movies' => $movies
        ]);
    }
}
