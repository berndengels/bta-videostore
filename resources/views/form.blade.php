@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mein Formular</div>
                <div class="card-body">
                    <form method="post" action="{{ route('send') }}" enctype="multipart/form-data">
                        @csrf
                        <x-form.input.select name="anrede" :value="$values['anrede']" :options="$optionsAnrede" />
                        <x-form.input.text name="name" :value="$values['name']" />
                        <x-form.input.email name="email" :value="$values['email']" />
                        <x-form.input.file name="image" value="" />
                        <x-form.input.date name="geburtstag" :value="$values['geburtstag']" />
                        <x-form.input.time name="uhrzeit" :value="$values['uhrzeit']" />
                        <x-form.input.textarea name="nachricht" :value="$values['nachricht']" />
                        <x-form.input.checkbox name="agb" :value="$values['agb']" />
                        <x-form.input.radio name="gender" :value="$values['gender']" :options="$optionsGender" />
                        <x-form.input.submit name="abschicken" :value="$values['abschicken']" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
