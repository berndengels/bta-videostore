@extends('layouts.simple')

@section('header')
    Meine Movies
@endsection

@section('body')
    <ul>
        <!-- hier über blade funktionalität movie liste ausgeben -->
        @foreach($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach

    </ul>
@endsection
