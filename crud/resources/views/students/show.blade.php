@extends ('master')

@section ('content')
<div class="col-sm-8 blog-main">

	<h1> {{ $student->firstname }} </h1>
	<h3>
	{{ $student->middlename }} {{ $student->lastname }}
	</h3>
	<h4>
	{{ $student->course }}
	</h4>

</div>
@endsection