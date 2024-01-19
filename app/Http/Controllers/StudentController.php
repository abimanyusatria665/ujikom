<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'gender' => 'required',
            'major' => 'required',
            'middleschool' => 'required' 
        ]);
        $student = Student::create([
            'full_name' => $request->fullname,
            'gender' => $request->gender,
            'major' => $request->major,
            'from_middle_school' => $request->middleschool
        ]);

        return redirect('/register')->with('success', 'Successfully Register!');
    }
    public function getDataByGender($gender){
         $student = Student::where('gender', $gender)->get();
        return view('/dashboard/gender', compact());
    }
    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}
