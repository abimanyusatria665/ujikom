<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class DashboardController extends Controller
{
    public function index(){
        return view('index');
    }

    public function dashboard(){
        $student = Student::all();
        return view('dashboard.dashboard', compact('student'));
    }
}
