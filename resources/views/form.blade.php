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
                        <x-form.input.select name="anrede" value="Frau" :options="$optionsAnrede" />
                        <x-form.input.text name="name" value="Paul Panter" />
                        <x-form.input.email name="email" value="engels@f50.de" />
                        <x-form.input.date name="geburtstag" value="1968-04-13" />
                        <x-form.input.time name="uhrzeit" value="19:00" />
                        <x-form.input.textarea name="nachricht" value="Lorem ipsum und so weiter ..." />
                        <x-form.input.checkbox name="agb" value="1" />
                        <x-form.input.radio name="gender" value="female" checked="male" :options="$optionsRadio" />
                        <x-form.input.submit name="abschicken" value="abschicken" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
