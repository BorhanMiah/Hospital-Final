<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::get();
        return view('backend.admin.schedule.index', compact('schedules'));
    }

    public function create()
    {
        
        $doctors = Doctor::all();
        return view('backend.admin.schedule.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required',
            'time' => 'required'
        ]);

        // dd($request->all());
        $data = new Schedule();
        $data->day = $request->day;
        $data->time = $request->time;
        $data->doctor_id = $request->doctor_id;
        $data->save();
        return redirect()->route('admin.schedule.index')->with('success', 'Schedule save successfully!');
    }

    public function edit($id)
    {
        $data = Schedule::findOrFail($id);
        $doctors = Doctor::all();
        return view('backend.admin.schedule.edit', compact('data', 'doctors'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'day' => 'required',
            'time' => 'required'
        ]);
        $data = Schedule::findOrFail($id);
        $data->day = $request->day;
        $data->time = $request->time;
        $data->doctor_id = $request->doctor_id;
        $data->update();
        return redirect()->route('admin.schedule.index')->with('success', 'Schedule update successfully!');
    }

    public function delete($id)
    {
        Schedule::findOrFail($id)->delete();
        return back()->with('success', 'Schedule Deleted successfully!');
    }
}
