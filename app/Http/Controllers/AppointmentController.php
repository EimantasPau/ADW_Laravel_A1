<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index() {
        $appointments = Appointment::all();
//        return dd($appointments);
        return view('appointments.index', compact('appointments'));
    }

    public function create() {
        return view('appointments.create');
    }

    public function store(Request $request) {
        Appointment::create($request->all());
        return redirect()->route('index');
    }
}
