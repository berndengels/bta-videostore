@extends('layouts.simple')

@section('header')
  {{ $header }} ({{ $movies->count() }})
@endsection

@section('body')
  <ul>
    @foreach($movies as $movie)
      <li>{{ $movie->title }}</li>
    @endforeach
  </ul>
@endsection
