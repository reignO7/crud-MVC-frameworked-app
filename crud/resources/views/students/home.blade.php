@extends ('master')

@section ('content')

  <div>
    <h1>Welcome!</h1>

    <div class="col-sm-8 blog-main">
    	@foreach ($students as $student)

    		@include ('students.student')

    	@endforeach
    </div>

    <hr>

  </div>

@endsection