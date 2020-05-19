@extends('layouts.simple')

@section('header')
    Meine Movies
@endsection

@section('body')
    {{ $movies->links() }}
    <ul>
        @foreach($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>
@endsection
