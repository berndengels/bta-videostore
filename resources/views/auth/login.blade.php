@extends('layouts.default')

@section('header')
    {{ __('Login') }}
@endsection

@section('body')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <x-form.input.email name="email" label="{{ __('E-Mail Address') }}" />
        <x-form.input.password name="password" label="{{ __('Password') }}" />
        <x-form.input.checkbox name="remember" value="{{ __('Remember Me') }}" />
        <x-form.input.submit name="speichern" value="{{ __('Login') }}">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </x-form.input.submit>

    </form>
@endsection
