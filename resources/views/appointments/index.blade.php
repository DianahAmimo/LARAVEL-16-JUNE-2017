@extends('layouts.app')

@section('content')

    <h1>Welcome to Appointments</h1>
    <hr>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Style</th>
            <th>Saloonist</th>
            <th>Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->username }}</td>
                <td>{{ $appointment->style }}</td>
                <td>{{ $appointment->saloonist }}</td>
                <td>{{ $appointment->date }}</td>
                <td>
                    <a class="btn btn-small btn-success" href="">Edit Appointment</a>

                    <a class="btn btn-small btn-info" href="">Delete Appointment</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop




