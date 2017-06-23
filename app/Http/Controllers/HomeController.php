<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SendMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        event(new SendMail(2));
//        Event::fire(new SendMail(2));
        return view('home');
    }
}
