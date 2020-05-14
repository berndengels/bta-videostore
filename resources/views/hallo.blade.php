@extends('layouts.simple')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hallo Welt das ist mein Inhalt</div>
                    <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
@endsection
