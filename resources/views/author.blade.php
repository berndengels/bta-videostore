@extends('layouts.default')

@section('header')
    Meine Autor
@endsection

@section('body')
    ID: {{ $author->id }}<br>
    Name: {{ $author->name }}<br>
    Movies: {{ $author->movies->count() }}<br>
    <ol>
        @foreach($author->movies as $item)
            <li>{{ $item->title }}</li>
        @endforeach
    </ol>
@endsection
