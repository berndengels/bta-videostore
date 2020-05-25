@extends('layouts.default')

@section('header')
    {{ __('Register') }}
@endsection

@section('body')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <x-form.input.text name="name" label="{{ __('Name') }}" />
        <x-form.input.email name="email" label="{{ __('E-Mail Address') }}" />
        <x-form.input.password name="password" label="{{ __('Password') }}" />
        <x-form.input.password name="password_confirmation" label="{{ __('Confirm Password') }}" />
        <x-form.input.submit name="Register" value="{{ __('Register') }}" />
    </form>
@endsection
