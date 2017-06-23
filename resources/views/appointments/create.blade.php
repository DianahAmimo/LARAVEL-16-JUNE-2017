@extends('layouts.app')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <h1>Create an appointment</h1>

        <hr>

        {!!  Form::open(['url' => 'appointments']) !!}

        @include('appointments._form', ['submitButtonText'=>'Create Appointment'])
        {{ Form::submit('Create an Appointment!', array('class' => 'btn btn-primary')) }}

        {!! Form::close() !!}
    </div>


@stop
