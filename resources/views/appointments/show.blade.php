@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h1>{!! $appointment->username !!}'s appointment</h1>
            <div class="well">
                <p>Style: {!! $appointment->style !!}</p>
                <p>Saloonist: {!! $appointment->saloonist !!}</p>
                <p>Date: {!! $appointment->date !!}</p>

                <a class="btn btn-primary" href="{{ url("appointments/$appointment->id/edit") }}">Edit Appointment</a>

                <form method="post" action="{!! action('AppointmentController@destroy', $appointment->id) !!}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group"> <div>
                            {!!  Form::model($appointment, ['method'=>'DELETE','url' => 'appointments/'.$appointment->id]) !!}
                            <br>
                            {{ Form::submit('Delete Appointment', array('class' => 'btn btn-danger')) }}
                    </div>
                    </div>
                </form>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection