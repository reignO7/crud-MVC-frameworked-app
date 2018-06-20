<?php

namespace App\Http\Controllers;

use App\Student;
use App\Remark;

class RemarkController extends Controller
{
    public function store(Student $student)
    {
    	$this->validate(request(), ['body' => 'required|min:2']);
    	//Method 1
    	// Remark::create([
    	// 	'body' => request('body'),
    	// 	'student_id' => $student->id
    	// ]);
    	//Method 2
    	//less lines of code, creates addRemarks function to Student.php
    	$student->addRemark(request('body'));

    	return back();
    }
}
