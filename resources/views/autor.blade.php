@extends('layouts.simple')

@section('header')
    Meine Autor
@endsection

@section('body')
    ID: {{ $data->id }}<br>
    Firstname: {{ $data->firstname }}<br>
    Lastname: {{ $data->lastname }}<br>
    Movies: {{ $data->movies->count() }}<br>
    First Movie: {{ $data->movies->first()->author->lastname }}<br>
    <!-- gib die liste aller movies dieses autors aus -->
    <ol>
        <li>Movie Title</li>
    </ol>
@endsection
