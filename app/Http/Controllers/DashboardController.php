<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('backend.admin.dashboard.list');
    }

    public function patientDashboard(){
        return view('patient.dashboard.list');
    }

    public function DoctorDashboard(){
        return view('doctor.dashboard.list');
    }
}
