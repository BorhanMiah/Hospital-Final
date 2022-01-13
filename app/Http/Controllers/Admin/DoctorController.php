<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Room;
use App\Models\Schedule;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::get();
        return view('backend.admin.doctor.index', compact('doctors'));
    }

    public function create()
    {
        $departments = Department::get();
        return view('backend.admin.doctor.create', compact('departments'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'photo' => 'required',
            'qualification' => 'required',
            'department_id' => 'required',
            'room_no' => 'required',
            'day' => 'required',
            'time' => 'required'
        ]);

        // dd($request->all());
        $doctor = new Doctor();
        $input1 = $request->only('name', 'email', 'mobile', 'qualification', 'photo', 'department_id');
        if($file = $request->file('photo'))
        {
            $name = time().str_replace(' ', '', $file->getClientOriginalName());
            // dd($file->move(public_path('backend/assets/images/doctor', $name)));
            $file->move(public_path('backend/assets/images/doctor', $name));
            $input1['photo'] = $name;
        }

        $doctor->fill($input1)->save();

        $room = new Room();
        $room->doctor_id = $doctor->id;
        $room->room_no = $request->room_no;
        $room->save();

        $schedule = new Schedule();
        $schedule->doctor_id = $doctor->id;
        $schedule->day = $request->day;
        $schedule->time = $request->time;
        $schedule->save();

        return redirect()->route('admin.doctor.index')->with('success', 'Data Save Successfully!');
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        $room = Room::findOrFail($id);
        $schedule = Schedule::findOrFail($id);
        $departments = Department::all();
        return view('backend.admin.doctor.edit', compact('doctor', 'room', 'schedule', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'photo' => 'mimes:jpg,jpeg,png,svg',
            'qualification' => 'required',
            'department_id' => 'required',
            'room_no' => 'required',
            'day' => 'required',
            'time' => 'required'
        ]);

        $doctor = Doctor::FindOrFail($id);
        $input1 = $request->only('name', 'email', 'mobile', 'qualification', 'photo', 'department_id');
        if($file = $request->file('photo'))
        {
            $name = time().str_replace(' ', '', $file->getClientOriginalName());
            $file->move(public_path('backend/assets/images/doctor', $name));
            @unlink(public_path('backend/assets/images/doctor'.$doctor->photo));
            $input1['photo'] = $name;
        }

        $doctor->fill($input1)->update();

        $room = Room::FindOrFail($id);
        $room->doctor_id = $doctor->id;
        $room->room_no = $request->room_no;
        $room->update();

        $schedule = Schedule::FindOrFail($id);
        $schedule->doctor_id = $doctor->id;
        $schedule->day = $request->day;
        $schedule->time = $request->time;
        $schedule->update();

        return redirect()->route('admin.doctor.index')->with('success', 'Data Update Successfully!');
    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        $room = Room::findOrFail($id);
        $schedule = Schedule::findOrFail($id);
        $departments = Department::all();
        return view('backend.admin.doctor.show', compact('doctor', 'room', 'schedule', 'departments'));
    }

    public function delete($id)
    {
        $doctor = Doctor::findOrFail($id);
        @unlink(public_path('backend/assets/images/doctor'.$doctor->photo));
        $room = Room::findOrFail($id);
        $schedule = Schedule::findOrFail($id);
        $doctor->delete();
        $room->delete();
        $schedule->delete();

        return back()->with('success', 'Data Deleted Successfully!');
    }
    public function doctorlist()
    {
        $doctors=Doctor::with('rooms')->get();
        return view('backend.admin.doctor.doctorlist', compact('doctors'));
    }
    
}
