@extends('layouts.simple')

@section('header')
    Autor: {{ $movie->author->name }}
@endsection

@section('body')
    ID: {{ $movie->id }}<br>
    Titel: {{ $movie->title }}<br>
    Preis: {{ $movie->price }}<br>
    Updated at: {{ $movie->updated_at->format('d.m.Y H:i') }}<br>
    Created at: {{ $movie->created_at->format('d.m.Y H:i') }}<br>
@endsection
