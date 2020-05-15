@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mein Formular</div>
                <div class="card-body">
                    <form method="post" action="{{ route('send') }}">
                        @csrf
                        @foreach($data as $field)
                            @php
                                $name    = $field['name'];
                                $type    = $field['type'];
                                $value   = $field['value'];
                                $options = isset($field['options']) ? $field['options'] : null;
                                $checked = isset($field['checked']) ? $field['checked'] : false
                            @endphp
                            <x-form.field
                                :type="$type"
                                :name="$name"
                                :value="$value"
                                :options="$options"
                                :checked="$checked"
                            />
                        @endforeach
                        <button class="btn btn-dark d-block mt-3 w-25 float-right" role="button">Absenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
