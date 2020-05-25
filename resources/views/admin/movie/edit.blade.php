@extends('layouts.default')

@section('header')
    Movie ID {{ $movie->id }}
@endsection

@section('body')
    <div>
        <a href="{{ route('movie.list') }}" class="btn-sm btn-primary" role="button">Zurück</a>
    </div>
    <div class="my-2">
        <form method="post" action="{{ route('movie.update', compact('movie')) }}">
            @csrf
            <x-inp.select name="author_id" label="Autor" :value="$movie->author->id" :options="$options" />
            <x-inp.text name="title" label="Titel" :value="$movie->title" />
            <x-inp.text name="price" label="Preis" :value="$movie->price" />
            <x-inp.submit name="speichern" value="speichern" />
        </form>
    </div>
@endsection
