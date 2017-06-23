@extends('layouts.app')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session('message1'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h1>Welcome to Appointments</h1>

    <hr>
    <a href="{{ url('/appointments/create') }}"><button class="btn btn-primary">Create Appointment</button></a>
    <br/><br/>

    @if ($appointments->isEmpty())
        <p>No Appointments yet</p>
    @else
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Style</th>
                <th>Saloonist</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>
                        <a href="{!! action('AppointmentController@show', $appointment->id) !!}">{{ $appointment->username }}</a>
                    </td>
                    <td>{{ $appointment->style }}</td>
                    <td>{{ $appointment->saloonist }}</td>
                    <td>{{ $appointment->date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif


@stop
