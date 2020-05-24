@extends('layouts.default')

@section('header')
    Autor ID {{ $author->id }}
@endsection

@section('body')
    <div>
        <a href="{{ route('author.list') }}" class="btn-sm btn-primary" role="button">Zurück</a>
    </div>
    <div class="my-2">
        <form method="post" action="{{ route('author.update', compact('author')) }}">
            @csrf
            <x-form.input.text name="firstname" label="Vorname" :value="$author->firstname" />
            <x-form.input.text name="lastname" label="Nachname" :value="$author->lastname" />
            <x-form.input.submit name="speichern" value="speichern" />
        </form>
    </div>
@endsection
