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
            <x-form.input.select name="author_id" label="Autor" :options="$options" />
            <x-form.input.text name="title" label="Titel" />
            <x-form.input.text name="price" label="Preis" />
            <x-form.input.submit name="speichern" value="speichern" />
        </form>
    </div>
@endsection
