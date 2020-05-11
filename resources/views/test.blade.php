@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="card mx-0">
        <div class="row justify-content-center">
            <div class="col-12 mx-0">
                <div class="card-header">Test</div>
                <div class="row card-body">

                    <x-sidebar text="Na Hallo" class="col-md-2" />

                    <div class="col-md-10">
                        {{ $info }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
