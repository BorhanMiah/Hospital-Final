<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('backend.receptionist.appointment.index', compact('appointments'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        $departments = Department::all();
        return view('backend.receptionist.appointment.create', compact('doctors', 'departments'));
    }
    public function request()
    {
        $appointments=Appointment::paginate(5);
        return view('backend.receptionist.appointment.patientInformation',compact('appointments'));
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
        $input['status'] = 1;
        $appointment->fill($input)->save();

        return redirect()->route('appointment.index')->with('success', 'Appointment Save Successfully!');
    }

    public function edit($id)
    {
        $data = Appointment::findOrFail($id);
        $doctors = Doctor::all();
        $departments = Department::all();
        return view('backend.receptionist.appointment.edit', compact('data', 'doctors', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required'
        ]);

        $appointment = Appointment::findOrFail($id);
        $input = $request->all();
        $input['status'] = 1;
        $appointment->fill($input)->update();

        return redirect()->route('receptionist.appointment.index')->with('success', 'Appointment Update Successfully!');
    }

    public function status1($id)
    {
        $data = Appointment::findOrFail($id);
        $data->status = 1;
        $data->update();
        return back()->with('success', 'Status Updated Successfully!');
    }

    public function status2($id)
    {
        $data = Appointment::findOrFail($id);
        $data->status = 0;
        $data->update();
        return back()->with('success', 'Status Updated Successfully!');
    }

    public function pending()
    { 
        $appointments = Appointment::Where('status', '=', 0)->get();
        return view('backend.receptionist.appointment.pending', compact('appointments'));
    }

    public function complete()
    { 
        $appointments = Appointment::Where('status', '=', 1)->get();
        return view('backend.receptionist.appointment.complete', compact('appointments'));
    }

    public function delete($id)
    {
        Appointment::findOrFail($id)->delete();
        return back()->with('success', 'Appointment Deleted Successfully!');
    }

    public function Search(){
        // dd(request()->all());
        $key = request()->search;
        $lists =Appointment::where('name','LIKE',"%{$key}%")->get();
        // dd($products);
        return view('backend.receptionist.appointment.search-index',compact('lists'));
    }

}
