<?php

namespace App;



class Remark extends Model
{
    //Remarks->student;
    public function student()
    {
    	return $this->belongsTo(Student::class);
    }
}
