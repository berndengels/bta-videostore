@extends('layouts.simple')

@section('header')
    Meine Autoren
@endsection

@section('body')
    <ul>
        @foreach($authors as $autor)
            <li>{{ $autor->firstname }} {{ $autor->lastname }}</li>
        @endforeach
    </ul>
@endsection
