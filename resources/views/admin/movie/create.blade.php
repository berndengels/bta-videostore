@extends('layouts.default')

@section('header')
    Movie erstellen
@endsection

@section('body')
    <div>
        <a href="{{ route('movie.list') }}" class="btn-sm btn-primary" role="button">Zurück</a>
    </div>
    <div class="my-2">
        <form method="post" action="{{ route('movie.store') }}">
            @csrf
            <x-inp.select name="author_id" label="Autor" :options="$options" />
            <x-inp.text name="title" label="Titel" />
            <x-inp.text name="price" label="Preis" />
            <x-inp.submit name="speichern" value="speichern" />
        </form>
    </div>
@endsection
