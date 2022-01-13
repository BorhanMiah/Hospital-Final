<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::get();
        return view('backend.admin.room.index', compact('rooms'));
    }

    public function create()
    {
        
        $doctors = Doctor::all();
        return view('backend.admin.room.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_no' => 'required',
        ]);

        // dd($request->all());
        $data = new Room();
        $data->room_no = $request->room_no;
        $data->doctor_id = $request->doctor_id;
        // dd($data->doctor->id);
        // if($request->doctor_id == $data->doctor->id)
        // {
        //     dd('ok');
        // }
        // dd('no');
        $data->save();
        return redirect()->route('admin.room.index')->with('success', 'Room save successfully!');
    }

    public function edit($id)
    {
        $data = Room::findOrFail($id);
        $doctors = Doctor::all();
        return view('backend.admin.room.edit', compact('data', 'doctors'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'room_no' => 'required',
        ]);
        $data = Room::findOrFail($id);
        $data->room_no = $request->room_no;
        $data->doctor_id = $request->doctor_id;
        $data->update();
        return redirect()->route('admin.room.index')->with('success', 'Room update successfully!');
    }

    public function delete($id)
    {
        Room::findOrFail($id)->delete();
        return back()->with('success', 'Room Deleted successfully!');
    }
}
