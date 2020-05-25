<?php
// app/http/Controller/AuthorController.php
namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
    public function index()
    {
        $data = Author::paginate(15);
        return view('authors', compact('data'));
    }

    public function show(Author $author)
    {
        return view('author', compact('author'));
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(AuthorRequest $request)
    {
        Author::create($request->validated());
        return redirect()->route('author.list');
    }

    public function edit(Author $author)
    {
        return view('admin.author.edit', compact('author'));
    }

    public function update(AuthorRequest $request, Author $author)
    {
        $author->update($request->validated());
        return redirect()->route('author.list');
    }

    public function destroy(Author $author)
    {
        $countMovies = $author->movies->count();
        $msg = <<< MSG
Der Autor kann nicht gelöscht werden, da ihm noch $countMovies Movie(s) zugegordnet sind!
MSG;
        if($countMovies > 0) {
            return back()
                ->with('alert', 'success')
                ->with('message', $msg)
            ;
        }

        $author->delete();
        return redirect()->route('author.list');
    }
}
