<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Http\Requests\CreateAppointmentRequest;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::get();

        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);

        return view('appointments.show', compact('appointment'));
    }

    public function store(CreateAppointmentRequest $request)
    {

        $appointment = Appointment::create($request->all());

        $appointments = Appointment::findOrFail($appointment->id);

        Mail::send('appointments.mail', [ 'appointment'=>$appointments ], function ($message2) {

            $message2->from('dianneprinsescah@gmail.com', 'Change of salon regulations');

            $message2->to('Email@mailtrap.io')->subject('Sending an email once an appointment has been made');
        });

        return redirect('/appointments')->with('message', 'Thank you for making the appointment. To edit the appointment, click on your username.');
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view ('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());
        return redirect('appointments');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect('appointments')->with('message1', 'The appointment has been successfully deleted');
    }

}
