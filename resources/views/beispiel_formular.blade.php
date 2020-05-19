@extends('layouts.simple')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Das ist ein Beispiel-Formular</div>
          <div class="card-body">
            <form>
              <x-form.input.text :name="$fullname['name']"
                :value="$fullname['value']" :msg="$fullname['msg']" />
              <x-form.input.email :name="$email['name']" :value="$email['value']"
                :msg="$email['msg']" />
              <x-form.input.date :name="$birthday['name']"
                :value="$birthday['value']" :msg="$birthday['msg']" />
              <x-form.input.textarea :name="$message['name']"
                :value="$message['value']" :msg="$message['msg']" />
  
              <x-form.input.select :name="$cities['name']"
                :value="$cities['value']" :options="$cities['options']"
                :msg="$cities['msg']" />
              <x-form.input.radio :name="$colors['name']"
                :options="$colors['options']" :msg="$colors['msg']" />
              <x-form.input.checkbox :name="$shapes['name']"
                :options="$shapes['options']" :msg="$shapes['msg']" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
