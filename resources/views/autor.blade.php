@extends('layouts.simple')

@section('header')
    Meine Autor
@endsection

@section('body')
    ID: {{ $data->id }}<br>
    Firstname: {{ $data->firstname }}<br>
    Lastname: {{ $data->lastname }}<br>
    Movies: {{ $data->movies->count() }}<br>
    <ol>
        @foreach($data->movies as $film)
            <li>{{ $film->title }}</li>
        @endforeach
    </ol>
@endsection
