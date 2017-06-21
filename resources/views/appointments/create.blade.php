@extends('layouts.app')

@section('content')

<h1>Create an appointment</h1>

<hr>

    {!!  Form::open(['url' => 'appointments']) !!}

    @include('appointments._form', ['submitButtonText'=>'Create Appointment'])

    {!! Form::close() !!}

@stop
