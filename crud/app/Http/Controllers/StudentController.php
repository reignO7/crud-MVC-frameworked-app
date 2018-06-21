<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
	public function index()
	{
    	$student = Student::all();
    	return view('students.index', compact('student'));
    }

    public function show($id)
    {
    	$student = Student::find($id);
    	return view('students.show', compact('student'));
    }
    public function create()
    {
    	return view('students.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'firstname' => 'required|string|max:25', 
    		'middlename' => 'required|string|max:25', 
    		'lastname' => 'required|string|max:25', 
    		'course' => 'required|string|max:50'
    	]);
    	Student::create($request->all());
        return redirect()->route('students.index')->with('success','Student registration success');
    }

    public function edit($id)
    {
    	$student = Student::find($id);
    	return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request,[
    		'firstname' => 'required|string|max:25', 
    		'middlename' => 'required|string|max:25', 
    		'lastname' => 'required|string|max:25', 
    		'course' => 'required|string|max:50'
    	]);
    	Student::find($id)->update($request->all());
    	return redirect()->route('students.index')->with('success', 'Edit successfull');
    }

    public function destroy($id)
    {
    	$student = Student::find($id)->delete();
    	return redirect()->route('students.index')->with('success','Student unregister success');
    }

}
