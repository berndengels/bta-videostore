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
        $movies = DB::table('movies')->paginate(15);

        return view('movies', [
            'movies' => $movies,
        ]);
    }
}
