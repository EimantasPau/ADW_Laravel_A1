<?php

namespace App\Http\Controllers;

use App\Appointment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    public function index(Request $request) {
        if($request->has('keyword')){
            $keyword = $request->input('keyword');
            $appointments = Appointment::where('title', 'LIKE', '%'. $keyword . '%')
                ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                ->orWhere('patientName', 'LIKE', '%'. $keyword . '%')
                ->get();
        } else {
            $appointments = Appointment::all()->where('user_id', Auth::ID());
        }
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
       Session::flash('successMessage', "You have successfully created an appointment.");
       return redirect()->route('index');
    }

    public function destroy($id){
        Appointment::destroy($id);
        Session::flash('successMessage', "Appointment deleted.");
       return redirect()->route('index');
    }

    public function edit($id){
        $appointment = Appointment::findOrFail($id);
        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, $id){
        $appointment = Appointment::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|max:255',
            'time' => 'required',
            'location' => 'required|string',
            'patientName' => 'required|string'
        ]);

        $appointment->title = $request->input('title');
        $appointment->description = $request->input('description');
        $appointment->time = $request->input('time');
        $appointment->location = $request->input('location');
        $appointment->patientName = $request->input('patientName');

        $appointment->save();
        Session::flash('successMessage', "You have successfully updated the appointment.");
        return redirect()->route('index');
    }
}
