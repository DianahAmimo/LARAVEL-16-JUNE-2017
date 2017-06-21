<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

class AppointmentController extends Controller
{
    protected function index()
    {
        $appointments = Appointment::get();

        return view('appointments.index', compact('appointments'));
    }

    protected function create()
    {
        return view('appointments.create');
    }

    protected function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointment.show', compact('appointment'));
    }

//    protected function store(Request, $appointment)
//    {
//
//        $appointment = $appointment()->all;
//    }

}
