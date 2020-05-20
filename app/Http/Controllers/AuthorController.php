<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index() {
        $data = Author::paginate(15);
        return view('autoren', compact('data'));
    }

    public function show( $id ) {
        $data = Author::find($id);
        return view('autor', compact('data'));
    }
}
