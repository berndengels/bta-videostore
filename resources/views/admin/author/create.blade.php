@extends('layouts.default')

@section('header')
    Autor erstellen
@endsection

@section('body')
    <div>
        <a href="{{ route('author.list') }}" class="btn-sm btn-primary" role="button">Zurück</a>
    </div>
    <div class="my-2">
        <form method="post" action="{{ route('author.store') }}">
            @csrf
            <x-form.input.text name="firstname" label="Vorname" />
            <x-form.input.text name="lastname" label="Nachname" />
            <x-form.input.submit name="speichern" value="speichern" />
        </form>
    </div>
@endsection
