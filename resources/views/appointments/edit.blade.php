@extends('layouts.app')

@section('content')

    <h1>Edit an appointment</h1>

    {!!  Form::model($appointment, ['method'=>'PUT','url' => 'appointments/'.$appointment->id]) !!}

        @include('appointments._form', ['submitButtonText'=>'UpdateAppointment'])

    {{ Form::submit('Update Appointment!', array('class' => 'btn btn-primary')) }}

    {!! Form::close() !!}

@stop