<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index() {
        $appointments = Appointment::all()->where('user_id', Auth::ID());
        return view('appointments.index', compact('appointments'));
    }

    public function create() {
        return view('appointments.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
           'title' => 'required',
           'description' => 'required|max:255',
           'time' => 'required',
            'location' => 'required|string',
            'patientName' => 'required|string'
        ]);

       $appointment = new Appointment();
       $appointment->title = $request->input('title');
       $appointment->description = $request->input('description');
       $appointment->time = $request->input('time');
       $appointment->location = $request->input('location');
       $appointment->patientName = $request->input('patientName');
       $appointment->user_ID = Auth::ID();

       $appointment->save();
        return redirect()->route('index');
    }

    public function destroy($id){
        Appointment::destroy($id);
       return redirect()->route('index');
    }
}
