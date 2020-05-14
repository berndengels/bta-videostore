@extends('layouts.first')

@section('meinHeader')
    <h1>Mein hinzugefügter Header</h1>
@endsection

@section('meinInhalt')
    <h3>Hallo Welt das ist mein Inhalt</h3>
    <form>
        @include('components.form.input.text', [
            'name' => 'fullname',
            'value' => 'Paul Meier',
        ])
        @include('components.form.input.email', [
            'name' => 'email',
            'value' => 'engels@goldenacker.de',
        ])
    </form>
@endsection

@section('meinFooter')
    <h3>Mein Footer Bereich</h3>
@endsection
