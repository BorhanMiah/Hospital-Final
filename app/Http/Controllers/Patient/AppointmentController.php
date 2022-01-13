<?php


namespace App\Http\Controllers\Patient;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        $doctors = Doctor::all();
        $departments = Department::all();
        return view('frontend.appointment', compact('doctors', 'departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required'
        ]);

        $appointment = new Appointment();
        $input = $request->all();
        $appointment->fill($input)->save();
        return back()->with('success', 'Appointment Save Successfully!');
    }
}

