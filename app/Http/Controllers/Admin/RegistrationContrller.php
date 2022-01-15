<?php
// namespace App\Http\Controllers\Admin;
// use App\Models\Payment;
// //use App\Models\Doctor;
// //use App\Models\Schedule;
// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;


namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationContrller extends Controller
{
    public function index()
{
    //$user = User:: orderBy('id','desc')->get();
    return view('backend.admin.user.index');
    //$user = User::all();
    //return view('backend.user.index',compact('user'));
}

public function create()
    {
        
        //$doctors = Doctor::all();
        return view('backend.admin.user.create');
    }

//     public function show()
//  {
//     $user = User:: orderBy('id','desc')->get();
//     return view('frontend.registration.create',compact('user'));
//        // return view('frontend.registration.create');
//  }

    public function store(Request $request)
    {//dd($request->all());
    	User::create([
            'role_id'=>$request->role_id,
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            
            
        ]);
        //$registration->save();
    	//auth()->login($registration);
    	return redirect()->route('user.index')->with('success','You are Register now.');
    }
//     public function edit($id)
//     {
//         $user = User:: orderBy('id','desc')->get();
//         $registration=User::find($id);
        
//         return view('backend.user.edit',compact('registration'));
//     }
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'name'=>'required',
//             'email'=>'required|email',
//             'role'=>'required'
//             ]);
//         $registration=User::find($id);
//         $registration->name=$request->get('name');
//         $registration->email=$request->get('email');
//         $registration->role=$request->get('role');
//         $registration->save();
//         auth()->login($registration);
//         return redirect()->route('user.index');

//     }
//     public function delete($id)
//     {

//         $registration=User::find($id);
//         $registration->delete();
//         return redirect()->back();
//     }
   
   
}
