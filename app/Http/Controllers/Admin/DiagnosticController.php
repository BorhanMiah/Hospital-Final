<?php

namespace App\Http\Controllers\Admin;
use App\Models\Diagnostic;
//use App\Models\Doctor;
//use App\Models\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiagnosticController extends Controller
{
    public function index()
    {
        $diagnostic=Diagnostic::all();
        //$schedules = Schedule::get();
        //return view('backend.diagnostic.in',compact('diagnostic'));
        return view('backend.admin.diagnostic.index',compact('diagnostic'));
    }

    public function create()
    {
        
        //$doctors = Doctor::all();
        return view('backend.admin.diagnostic.create');
    }

    public function store(Request $request)
    {
        
    	$request->validate([
         'p_name'=>'required',
         'date'=> 'required',
         't_name'=> 'required',
         'test_price'=>'required'
    	]);
        // dd($request->all());
    	Diagnostic::create([

         'p_name'=>$request->p_name,
         'date'=>$request->date,
         't_name'=>$request->t_name,
         'test_price'=>$request->test_price,
    	]); 

    	return redirect()->route('admin.diagnostic.index')->with('success','diagnostic is Saved');  
    }
    public function edit($id)
    {

    	$diagnostic= Diagnostic::find($id);

    	return view('backend.admin.diagnostic.edit', compact('diagnostic'));
    	
    }
    public function update( Request $request, $id)
    {
    	$request->validate([
         'p_name'=>'required',
         'date'=> 'required',
         't_name'=> 'required',
         'test_price'=>'required'
    	]);

    	$diagnostic=Diagnostic::findOrFail($id);
    	$diagnostic->p_name=$request->get('p_name');
    	$diagnostic->date=$request->get('date');
    	$diagnostic->t_name=$request->get('t_name');
    	$diagnostic->test_price=$request->get('test_price');
    	$diagnostic->save();
    	//return redirect('/diagnostic')->with('success', 'Data is Update');
        return redirect()->route('admin.diagnostic.index');
        //return redirect()->route('presception.index');
    }
    public function delete($id)
    {
    	$diagnostic=Diagnostic::find($id);
    	$diagnostic->delete();
        return redirect()->back();

    }

    
}
