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
            <x-form.input.select name="author_id" label="Autor" :value="$movie->author->id" :options="$options" />
            <x-form.input.text name="title" label="Titel" :value="$movie->title" />
            <x-form.input.text name="price" label="Preis" :value="$movie->price" />
            <x-form.input.submit name="speichern" value="speichern" />
        </form>
    </div>
@endsection
