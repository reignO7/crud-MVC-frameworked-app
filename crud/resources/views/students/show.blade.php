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
	
	<hr>
	<h4>Remarks:</h4>
	<div class="comments">

		<ul class="list-group">
		@foreach ($student->remarks as $remark)
			<article>
				<li class="list-group-item">
					<strong>
						{{ $remark->created_at->diffForHumans() }}: &nbsp;
					</strong>
				{{ $remark->body }}
				</li>
			</article>
		@endforeach
		</ul>

	</div>
	<br>
	{{-- Add a comment --}}

	<div class="card">
		<div class="card-block">
			<form method="POST" action="/students/{{ $student->id }}/remarks">

				{{ csrf_field() }}

				<!-- {{ method_field('PATCH') }} -->

			<div class="form-group">

				<textarea name="body" placeholder="Your remarks here." class="form-control" id="body"></textarea>
				<!-- <textarea name="body" placeholder="Your remarks here." class="form-control" id="body" required></textarea> -->
				
			</div>

			<div class="form-group">

				<button type="submit" class="btn btn-primary">Submit</button>
				
			</div>
			</form>

			@include ('layouts.errors')

		</div>
	</div>

</div>
<hr>
@endsection
