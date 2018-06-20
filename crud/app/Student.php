<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
// the parent class named model helps the child classes with repetive $guard
class Student extends Model
{
    // protected $fillable = ['firstname', 'middlename', 'lastname', 'course'];
    // protected $guarded = [];
    public function remarks()
    {
    	return $this->hasMany(Remark::class);
    }

    public function addRemark($body)
    {
    	// Remark::create([
    	// 	'body' => $body,
    	// 	'student_id' => $this->id
    	// ]);
    	$this->remarks()->create(compact('body'));
    }
}
