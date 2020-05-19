<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $data = Author::paginate(15);
        return view('autoren', compact('data'));
    }

    public function show() {

    }
}
