<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
	public function index()
    {
    	//$students = Student::latest()->get();
    	$students = Student::orderBy('created_at', 'desc')->get();
    	//can be any attribute to order

    	return view('students.home', compact('students'));
    }

    public function create()
    {
    	return view('students.create');
    }

    public function store()
    {	
    	$this->validate(request(),	[
    		'firstname' => 'required',
    		'middlename' => 'required',
    		'lastname' => 'required',
    		'course' => 'required'
    	]);

    	//METHOD 1
    	// $student = new Student;

    	// $student->firstname = request('firstname');

    	// $student->middlename = request('middlename');

    	// $student->lastname = request('lastname');

    	// $student->course = request('course');

    	// $student->save();

    	//METHOD 2
    	// Student::create([
    	// 	'firstname' => request('firstname'),
    	// 	'middlename' => request('middlename'),
    	// 	'lastname' => request('lastname'),
    	// 	'course' => request('course')
    	// ]);

    	//METHOD 3
    	Student::create(request(['firstname','middlename','lastname','course']));

    	return redirect('/');
    }

    public function show($id)
    {	
    	$student = Student::find($id);

    	return view('students.show', compact('student'));
    }

    //or
    // public function show(Student $student)
    // {	
    // 	return view('students.show', compact('student'));
    // }
}
