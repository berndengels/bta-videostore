<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceholderController extends Controller
{
    public function posts() {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->object();
        return view('placeholder.posts', ['posts' =>$posts]);
    }
}
