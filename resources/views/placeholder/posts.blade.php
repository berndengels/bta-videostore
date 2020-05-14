@extends('layouts.simple')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">

                        @if (count($posts))

                            <table class="table-striped">
                                <tr>
                                    <th>Id</th>
                                    <th>UserId</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->userId }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->body }}</td>
                                    </tr>
                                @endforeach
                            </table>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
