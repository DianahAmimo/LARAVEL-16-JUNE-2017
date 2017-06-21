@extends('layouts.app')

@section('content')

    <h1>Edit an appointment</h1>

    {!!  Form::model($appointment, ['method' => 'PATCH', 'url' => 'appointments/' . $appointment->id]) !!}

    {!! Form::close() !!}

@stop