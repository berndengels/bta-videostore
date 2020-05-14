@extends('layouts.simple')

@section('content')
    <h3>Hallo Welt das ist mein Inhalt</h3>
    <div class="m-4">
        <form>
            <!-- erst ab laravel version 7 -->
            <x-form.input.text name="fullname" value="Paul Panter" :msg="$message" />
            <x-form.input.email name="email" value="engels@goldenacker.de" />
            <x-form.input.select name="autoren" value="1" :options="$options" />
            {{--
            <!-- bis laravel version <= 6 -->
            // alles auskommentiert
            @include('components.form.input.text', [
                'name' => 'fullname',
                'value' => 'Paul Meier',
            ])
            @include('components.form.input.email', [
                'name' => 'email',
                'value' => 'engels@goldenacker.de',
            ])
            --}}
        </form>
    </div>
@endsection
