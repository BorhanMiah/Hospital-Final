<?php
namespace App\Http\Controllers\Admin;
use App\Models\Payment;
//use App\Models\Doctor;
//use App\Models\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payment=Payment::paginate(5);
    	return view('backend.admin.payment.index',compact('payment'));


        //$schedules = Schedule::get();
       // return view('backend.admin.payment.index');
    }

    public function create()
    {
        
        //$doctors = Doctor::all();
        return view('backend.admin.payment.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
         
         'p_name'=> 'required',
         'date'=>'required',
         'd_price'=>'required',
         't_price'=> 'required',
         'm_price'=> 'required'
         
    	]);
    	Payment::create([
        
         'p_name'=>$request->p_name,
         'date'=>$request->date,
         'd_price'=>$request->d_price,
         't_price'=>$request->t_price,
         'm_price'=>$request->m_price,
         'total_price'=>($request->get('d_price') + $request->get('t_price') + $request->get('m_price') )
    	]); 
    	//$payment->save();
    	//return redirect('/payment')->with('success','payment is Saved');  
        return redirect()->route('payment.index')->with('success','payment is Saved'); 
    	
    }
    public function edit($id)
    {

    	$payment= Payment::find($id);

    	return view('backend.admin.payment.edit', compact('payment'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request->validate([
         
         'p_name'=> 'required',
         'date'=>'required',
         'd_price'=>'required',
         't_price'=> 'required',
         'm_price'=> 'required',
         
    	]);

    	$payment=Payment::findOrFail($id);
    	$payment->p_name=$request->get('p_name');
    	$payment->date=$request->get('date');
    	$payment->d_price=$request->get('d_price');
    	$payment->t_price=$request->get('t_price');
    	$payment->m_price=$request->get('m_price');
    	$payment->total_price=($request->get('r_price') + $request->get('d_price') + $request->get('t_price') + $request->get('m_price') );
    	$payment->save();
        return redirect()->route('admin.payment.index')->with('success', 'Data is Update');
    	//return redirect('/payment')->with('success', 'Data is Update');
    }
    public function delete($id)
    {
    	$payment=Payment::find($id);
    	$payment->delete();
    	//return redirect('/room')->with('success', 'Data is delete Successfully');
        return redirect()->back();
    }
    public function show($id)
    {
        $payment=Payment::findOrFail($id);
        return view('backend.admin.payment.show', compact('payment'));
    }

    
}



