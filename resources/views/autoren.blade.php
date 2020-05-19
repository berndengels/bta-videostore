@extends('layouts.simple')

@section('header')
    Meine Autoren
@endsection

@section('body')
    {{ $data->links() }}
    <ul>
        @foreach($data as $item)
            <li>{{ $item->firstname }} {{ $item->lastname }}</li>
        @endforeach
    </ul>
@endsection
