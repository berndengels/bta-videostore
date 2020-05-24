@extends('layouts.default')

@section('header')
    Meine Autoren
@endsection

@section('body')
    {{ $data->links() }}
    <table class="table table-striped table-responsive">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Anzahl Movies</th>
            @auth
                <th colspan="2"><br></th>
            @endauth
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td><a class="nav-link" href="{{ route('author.show', ['author' => $item]) }}">{{ $item->name }}</a></td>
                <td align="center">{{ $item->movies->count() }}</td>
                @auth
                    <td><a href="{{ route('author.edit', ['author' => $item]) }}" class="btn-sm btn-primary" role="button">Edit</a></td>
                    <td><a href="{{ route('author.destroy', ['author' => $item]) }}" class="btn-sm btn-danger delsoft" role="button">Delete</a></td>
                @endauth
            </tr>
        @endforeach
    </table>
@endsection
