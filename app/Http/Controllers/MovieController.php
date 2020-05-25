<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    protected $auhtorOptions;

    public function __construct()
    {
        $this->auhtorOptions = Author::all()->keyBy('id')->map(function ($item) {
            return $item->name;
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Movie::orderBy('title')->paginate(15);
        return view('movies', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param Movie $movie
     * @return Response
     */
    public function show(Movie $movie)
    {
        return view('movie', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.movie.create', ['options' => $this->auhtorOptions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(MovieRequest $request)
    {
        Movie::create($request->validated());
        return redirect()->route('movie.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Movie $movie
     * @return Response
     */
    public function edit(Movie $movie)
    {
        return view('admin.movie.edit', ['movie' => $movie, 'options' => $this->auhtorOptions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Movie $movie
     * @return Response
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        return redirect()->route('movie.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Movie $movie
     * @return Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movie.list');
    }
}
