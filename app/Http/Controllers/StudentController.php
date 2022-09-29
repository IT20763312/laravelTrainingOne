<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('view')->with('students',$students);
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('show')->with('students',$student);
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('view');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit')->with('students',$student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('view');
    }
}
