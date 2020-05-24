@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meine Formular Daten</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Key</th>
                            <th>Value</th>
                        </tr>
                        @foreach($data as $key => $value)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>
                                    @if($key === 'image')
                                        {{-- $value --}}
                                        <img src="{{ asset($value) }}" width="300" :alt="$value" :title="$value">
                                    @else
                                        {{ $value }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
