@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($student,['route'=>['students.update',$student->id],'method'=>'PATCH']) }}
      @include('students.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection