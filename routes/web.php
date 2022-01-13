<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DiagnosticController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Doctor\PresceptionController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Receptionist\DashboardController as ReceptionistDashboardController;
use App\Http\Controllers\Receptionist\AppointmentController;
use App\Http\Controllers\Patient\AppointmentController as PatientAppointmentController;
use App\Http\Controllers\Doctor\DashboardController as DoctorDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/department/index', [DepartmentController::class, 'index'])->name('department.index');
    Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
    Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::get('/department/delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');

    //Route::get('/doctor/index', [DoctorController::class, 'index'])->name('doctor.index');
    //Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
    //Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    //Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
    //Route::post('/doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
    //Route::get('/doctor/show/{id}', [DoctorController::class, 'show'])->name('doctor.show');
    //Route::get('/doctor/delete/{id}', [DoctorController::class, 'delete'])->name('doctor.delete');
    


    // Route::get('/room/index', [RoomController::class, 'index'])->name('room.index');
    // Route::post('/room/store', [RoomController::class, 'store'])->name('room.store');
    // Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
    // Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
    // Route::post('/room/update/{id}', [RoomController::class, 'update'])->name('room.update');
    // Route::get('/room/delete/{id}', [RoomController::class, 'delete'])->name('room.delete');


    // Route::get('/diagnostic/index', [DiagnosticController::class, 'index'])->name('diagnostic.index');
    // Route::get('/diagnostic/create', [DiagnosticController::class, 'create'])->name('diagnostic.create');
    // Route::post('/diagnostic/store', [DiagnosticController::class, 'store'])->name('diagnostic.store');
    // Route::get('/diagnostic/edit/{id}', [DiagnosticController::class, 'edit'])->name('diagnostic.edit');
    // Route::post('/diagnostic/update/{id}', [DiagnosticController::class, 'update'])->name('diagnostic.update');
    // Route::get('/diagnostic/show/{id}', [DiagnosticController::class, 'show'])->name('diagnostic.show');
    // Route::get('/diagnostic/delete/{id}', [DiagnosticController::class, 'delete'])->name('diagnostic.delete');



    // Route::get('/schedule/index', [ScheduleController::class, 'index'])->name('schedule.index');
    // Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store');
    // Route::get('/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
    // Route::get('/schedule/edit/{id}', [ScheduleController::class, 'edit'])->name('schedule.edit');
    // Route::post('/schedule/update/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
    // Route::get('/schedule/delete/{id}', [ScheduleController::class, 'delete'])->name('schedule.delete');


    // Route::get('/payment/index', [PaymentController::class, 'index'])->name('payment.index');
    // Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');
    // Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');
    // Route::get('/payment/edit/{id}', [PaymentController::class, 'edit'])->name('payment.edit');
    // Route::post('/payment/update/{id}', [PaymentController::class, 'update'])->name('payment.update');
    // Route::get('/payment/show/{id}', [PaymentController::class, 'show'])->name('payment.show');
    // Route::get('/payment/delete/{id}', [PaymentController::class, 'delete'])->name('payment.delete');
    // Route::get('/payment/show/{id}', [PaymentController::class, 'show'])->name('payment.show');
    
});
Route::group(['as' => 'doctor.', 'prefix' => 'doctor', 'namespace' => 'Doctor', 'middleware' => ['auth', 'doctor']], function(){
    Route::get('/dashboard', [DoctorDashboardController::class, 'dashboard'])->name('dashboard');
});
Route::group(['as' => 'receptionist.', 'prefix' => 'receptionist', 'namespace' => 'Receptionist', 'middleware' => ['auth', 'receptionist']], function(){
    Route::get('/dashboard', [ReceptionistDashboardController::class, 'dashboard'])->name('dashboard');

    

});
    Route::get('/doctor/index', [DoctorController::class, 'index'])->name('doctor.index');
    Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::post('/doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
    Route::get('/doctor/show/{id}', [DoctorController::class, 'show'])->name('doctor.show');
    Route::get('/doctor/delete/{id}', [DoctorController::class, 'delete'])->name('doctor.delete');
    Route::get('/doctor/doctorlist', [DoctorController::class, 'doctorlist'])->name('doctor.doctorlist');

    
Route::get('/appointment/index', [AppointmentController::class, 'index'])->name('appointment.index');
Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');
Route::get('/appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('appointment.edit');
Route::get('/appointment/status1/{id}', [AppointmentController::class, 'status1'])->name('appointment.status1');
Route::get('/appointment/status2/{id}', [AppointmentController::class, 'status2'])->name('appointment.status2');
Route::get('/appointment/pending', [AppointmentController::class, 'pending'])->name('appointment.pending');
Route::get('/appointment/complete', [AppointmentController::class, 'complete'])->name('appointment.complete');
Route::post('/appointment/update/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
Route::get('/appointment/delete/{id}', [AppointmentController::class, 'delete'])->name('appointment.delete');
Route::get('/appointment/search',[AppointmentController::class,'Search'])->name('appointment.search');
Route::get('/appointment/patientInformation',[AppointmentController::class,'request'])->name('appointment.patientInformation');


Route::get('/room/index', [RoomController::class, 'index'])->name('room.index');
Route::post('/room/store', [RoomController::class, 'store'])->name('room.store');
Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
Route::post('/room/update/{id}', [RoomController::class, 'update'])->name('room.update');
Route::get('/room/delete/{id}', [RoomController::class, 'delete'])->name('room.delete');


Route::get('/schedule/index', [ScheduleController::class, 'index'])->name('schedule.index');
Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store');
Route::get('/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::get('/schedule/edit/{id}', [ScheduleController::class, 'edit'])->name('schedule.edit');
Route::post('/schedule/update/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
Route::get('/schedule/delete/{id}', [ScheduleController::class, 'delete'])->name('schedule.delete');


Route::get('/diagnostic/index', [DiagnosticController::class, 'index'])->name('diagnostic.index');
Route::get('/diagnostic/create', [DiagnosticController::class, 'create'])->name('diagnostic.create');
Route::post('/diagnostic/store', [DiagnosticController::class, 'store'])->name('diagnostic.store');
Route::get('/diagnostic/edit/{id}', [DiagnosticController::class, 'edit'])->name('diagnostic.edit');
Route::post('/diagnostic/update/{id}', [DiagnosticController::class, 'update'])->name('diagnostic.update');
Route::get('/diagnostic/show/{id}', [DiagnosticController::class, 'show'])->name('diagnostic.show');
Route::get('/diagnostic/delete/{id}', [DiagnosticController::class, 'delete'])->name('diagnostic.delete');


Route::get('/payment/index', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');
    Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');
    Route::get('/payment/edit/{id}', [PaymentController::class, 'edit'])->name('payment.edit');
    Route::post('/payment/update/{id}', [PaymentController::class, 'update'])->name('payment.update');
    Route::get('/payment/show/{id}', [PaymentController::class, 'show'])->name('payment.show');
    Route::get('/payment/delete/{id}', [PaymentController::class, 'delete'])->name('payment.delete');
    Route::get('/payment/show/{id}', [PaymentController::class, 'show'])->name('payment.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/presception/index', [PresceptionController::class, 'index'])->name('presception.index');
Route::get('/presception/create', [PresceptionController::class, 'create'])->name('presception.create');
Route::post('/presception/store', [PresceptionController::class, 'store'])->name('presception.store');
Route::get('/presception/show/{id}', [PresceptionController::class, 'show'])->name('presception.show');
Route::get('/presception/edit/{id}', [PresceptionController::class, 'edit'])->name('presception.edit');
Route::post('/presception/update/{id}', [PresceptionController::class, 'update'])->name('presception.update');
Route::get('/presception/delete/{id}', [PresceptionController::class, 'delete'])->name('presception.delete');




//Route::get('/pas',[PresceptionController::class,'ki'])->name('presception.pas');
//Route::get('/pas/create',[PresceptionController::class,'create'])->name('presception.create');
//Route::post('/pas/create',[PresceptionController::class,'store'])->name('presception.store');
//Route::get('/pas/delete/{id}',[PresceptionController::class,'delete'])->name('presception.presceptiondelete');
//Route::get('/pas/edit/{id}',[PresceptionController::class,'edit'])->name('presception.edit');
//Route::put('/pas/update/{id}',[PresceptionController::class,'update'])->name('presception.update');
//Route::get('/pas/show/{id}',[PresceptionController::class,'show'])->name('presception.show');
//Route::get('/pas/print-pdf/{id}',[PresceptionController::class,'printPDF'])->name('presception.pdf');

Route::post('patient/appointment/store', [PatientAppointmentController::class, 'store'])->name('patient.appointment.store');
Route::get('patient/appointment/create', [PatientAppointmentController::class, 'create'])->name('patient.appointment.create');


















Route::view('/rowshanhospital','frontend.home')->name('rowshanhospital');
// Route::get('login',[SessionsController::class,'cr'])->name('login.create');
// Route::post('/login',[SessionsController::class,'store'])->name('login.store');
// Route::get('/logout',[SessionsController::class,'destroy'])->name('logout');
