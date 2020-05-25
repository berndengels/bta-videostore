@extends('layouts.default')

@section('header')
    Meine Movies
@endsection

@section('body')
    <div class="my-2">
        <a href="{{ route('movie.create') }}" class="btn-sm btn-primary" role="button">Create Movie</a>
    </div>
    {{ $data->links() }}
    <table class="table table-striped table-responsive">
        <tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Titel</th>
            <th>Preis</th>
            <th>Created at</th>
            <th>Updated at</th>
            @auth
            <th colspan="2"></th>
            @endauth
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->author->name }}</td>
                <td><a class="nav-link" href="{{ route('movie.show', ['movie' => $item]) }}">{{ $item->title }}</a></td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                <td>{{ $item->updated_at->format('d.m.Y H:i') }}</td>
                <td><a href="{{ route('movie.edit', ['movie' => $item]) }}" class="btn-sm btn-primary" role="button">Edit</a></td>
                <td><a href="{{ route('movie.destroy', ['movie' => $item]) }}" class="btn-sm btn-danger delsoft" role="button">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection
