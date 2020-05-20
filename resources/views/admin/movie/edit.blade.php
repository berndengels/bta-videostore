@extends('layouts.simple')

@section('header')
    Movie ID {{ $movie->id }}
@endsection

@section('body')
    <div>
        <a href="{{ route('movies') }}" class="btn-sm btn-primary" role="button">Zurück</a>
    </div>
    <div class="my-2">
        <form method="post" action="{{ route('movie.update', compact('movie')) }}">
            @csrf
            <x-form.input.select name="author" :value="$movie->author->id" :options="$options" />
            <x-form.input.text name="title" :value="$movie->title" />
            <x-form.input.text name="price" :value="$movie->price" />
            <x-form.input.submit name="speichern" value="speichern" />
        </form>
    </div>
@endsection
