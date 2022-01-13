<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::get();
        return view('backend.admin.department.index', compact('departments'));
    }

    public function create()
    {
        return view('backend.admin.department.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = new Department();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('admin.department.index')->with('success', 'Department save successfully!');
    }

    public function edit($id)
    {
        $data = Department::findOrFail($id);
        return view('backend.admin.department.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = Department::findOrFail($id);
        $data->name = $request->name;
        $data->update();
        return redirect()->route('admin.department.index')->with('success', 'Department update successfully!');
    }

    public function delete($id)
    {
        Department::findOrFail($id)->delete();
        return back()->with('success', 'Department Deleted successfully!');
    }
}
