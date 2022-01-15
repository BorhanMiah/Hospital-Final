<div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src={{asset('backend/assets/images/logo.svg')}} alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                    @if (auth()->user()->role_id === 3)

                        <li class="sidebar-item {{ Route::is('receptionist/dashboard') ? 'active' : '' }}">
                            <a href="{{route('receptionist.dashboard')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>

                        </li>

                        

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Appointment</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{route('appointment.create')}}">Make Appointment</a>
                                </li>

                                <li>
                                    <a href="{{route('appointment.index')}}">Appointment List</a>
                                </li>

                                <li>
                                    <a href="{{route('appointment.pending')}}">Pending Appointment</a>
                                </li>

                                <li>
                                    <a href="{{route('appointment.complete')}}">Complete Appointment</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item {{ Route::is('receptionist/doctor/index') ? 'active' : '' }}">
                            <a href="{{route('doctor.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Doctor</span>
                            </a>
                         </li>

                        <li class="sidebar-item {{ Route::is('receptionist/dashboard') ? 'active' : '' }}">
                            <a href="{{route('room.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Room</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ Route::is('receptionist/schedule/index') ? 'active' : '' }}">
                            <a href="{{route('schedule.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Schedule</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ Route::is('receptionist/dashboard') ? 'active' : '' }}">
                            <a href="{{route('diagnostic.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Diagnostic</span>
                            </a>

                        </li>

                        <li class="sidebar-item {{ Route::is('admin/schedule/index') ? 'active' : '' }}">
                            <a href="" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Contact</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ Route::is('receptionist/dashboard') ? 'active' : '' }}">
                            <a href="{{route('payment.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Payment</span>
                            </a>

                        </li>

                        <li class="sidebar-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger" style="height: 30; width: 258px;">Logout</button>
                        </form>
                        </li>
                        
                            
                        @elseif (auth()->user()->role_id === 1)


                            <li class="sidebar-item {{ Route::is('admin/dashboard') ? 'active' : '' }}">
                            <a href="{{route('admin.dashboard')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                            </li>

                            <li class="sidebar-item {{ Route::is('') ? 'active' : '' }}">
                            <a href="{{route('admin.user.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>User</span>
                            </a>
                            </li>


                            <li class="sidebar-item {{ Route::is('admin/department/index') ? 'active' : '' }}">
                            <a href="{{route('admin.department.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Department</span>
                            </a>
                            </li>

                            <li class="sidebar-item {{ Route::is('admin/department/index') ? 'active' : '' }}">
                            <a href="{{route('appointment.create')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Make Appointment</span>
                            </a>
                            </li>

                            <li class="sidebar-item {{ Route::is('admin/department/index') ? 'active' : '' }}">
                            <a href="{{route('appointment.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Appointment List</span>
                            </a>
                            </li>

                            <li class="sidebar-item {{ Route::is('admin/department/index') ? 'active' : '' }}">
                            <a href="{{route('appointment.patientInformation')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Patient Information</span>
                            </a>
                            </li>

                            <li class="sidebar-item {{ Route::is('admin/doctor/index') ? 'active' : '' }}">
                            <a href="{{route('doctor.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Doctor</span>
                            </a>
                            </li>

                            <li class="sidebar-item {{ Route::is('admin/room/index') ? 'active' : '' }}">
                            <a href="{{route('room.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Room</span>
                            </a>
                            </li>

                            <li class="sidebar-item {{ Route::is('admin/schedule/index') ? 'active' : '' }}">
                            <a href="{{route('schedule.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Schedule</span>
                            </a>
                            </li>

                            <li class="sidebar-item {{ Route::is('admin/diagnostic/index') ? 'active' : '' }}">
                            <a href="{{route('diagnostic.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Diagnostic</span>
                            </a>
                            </li>
                            <li class="sidebar-item {{ Route::is('admin/diagnostic/index') ? 'active' : '' }}">
                            <a href="{{route('payment.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Payment</span>
                            </a>
                            </li>

                            <li class="sidebar-item">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="height: 30; width: 258px;">Logout</button>
                                </form>
                            </li>
                            
                        
                            @elseif (auth()->user()->role_id === 2)
                       
                        <!-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Doctor</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{route('appointment.index')}}">Patient Information</a>
                                </li>

                                <li>
                                    <a href="">Schedule</a>
                                </li>

                                <li>
                                    <a href="">Doctor</a>
                                </li>

                                <li>
                                    <a href="{{route('presception.index')}}">Presception</a>
                                </li>
                                

                            </ul> -->
                            
                                <a href="{{route('appointment.patientInformation')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Patient Information</span>
                            </a>

                            </li>
                                <a href="{{route('schedule.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Schedule</span>
                            </a>
                            </li>
                            
                                <a href="{{route('presception.index')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Presception</span>
                            </a>
                            </li>

                        </li>


                        <li class="sidebar-item">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="height: 30; width: 258px;">Logout</button>
                                </form>
                            </li>
                            @endif
                            
                        

                            

                    </ul>
                    
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        