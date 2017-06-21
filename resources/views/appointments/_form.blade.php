@extends('layouts.app')

@section('content')


    {{ Form::open(array('url' => 'appointments')) }}

    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', Request::old('username'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('style', 'Style') }}
        {{ Form::text('style', Request::old('style'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('saloonist', 'Saloonist') }}
        {{ Form::select('saloonist', array('0' => 'Select the preferred saloonist', '1' => 'Dianne Amimo', '2' => 'Dorothy Dickens', '3' => 'Immanuel Peters'), Request::old('saloonist'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::text('date', Request::old('date'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create an Appointment!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@stop