@extends('layouts.simple')

@section('header')
    Meine Autoren ({{ $authors->count() }})
@endsection

@section('body')
    <ul>
        @foreach($authors as $autor)
            <li>{{ $autor->firstname }} {{ $autor->lastname }}</li>
        @endforeach
    </ul>
@endsection
