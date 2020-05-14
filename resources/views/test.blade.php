@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $header }}</div>
                <div class="card-body">
                    <ul>
                        @foreach($liste as $li)
                            <li>{{ $li }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
