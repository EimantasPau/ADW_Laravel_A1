<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index() {
        $appointments = Appointment::all();
        return view('appointments/index', $appointments);
    }

    public function create() {
        return view('appointments/create');
    }
}
