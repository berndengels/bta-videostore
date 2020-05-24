<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AuthorRequest;
use Illuminate\Support\MessageBag;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Author::paginate(15);
        return view('authors', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Author  $author
     * @return Response
     */
    public function show(Author $author)
    {
        return view('author', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(AuthorRequest $request)
    {
        Author::create($request->validated());
        return redirect()->route('author.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Author $author
     * @return Response
     */
    public function edit(Author $author)
    {
        return view('admin.author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param Author $author
     * @return Response
     */
    public function update(AuthorRequest $request, Author $author)
    {
        $author->update($request->validated());
        return redirect()->route('author.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Author $author
     * @return Response
     */
    public function destroy(Author $author)
    {
        $countMovies = $author->movies->count();
        if($countMovies > 0) {
            return back()
                ->with('alert', 'success')
                ->with('message', 'Der Autor kann nicht gelöscht werden, da ihm noch Movies ('.$countMovies.') zugegordnet sind!')
            ;
        }

        $author->delete();
        return redirect()->route('author.list');
    }
}
