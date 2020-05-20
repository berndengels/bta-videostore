@extends('layouts.simple')

@section('header')
    Meine Autoren
@endsection

@section('body')
    {{ $data->links() }}
    <ul>
        @foreach($data as $item)
            <li>
                <a href="{{ route('autor', ['id' => $item->id]) }}">
                    {{ $item->firstname }} {{ $item->lastname }}</a>

                ({{ $item->movies->count() }} Movies)
            </li>
        @endforeach
    </ul>
@endsection
