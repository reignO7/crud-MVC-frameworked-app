<div class="col-sm-8 blog-main">
	<br>
<h2>
	<a href="/students/{{ $student->id }}">
		{{ $student->firstname }}
	</a>
</h2>
<!-- <h3>
	{{ $student->middlename }} {{ $student->lastname }}
</h3>
<h4>
	{{ $student->course }}
</h4> -->
<p class="blog-post-meta">
	{{ $student->created_at->toFormattedDateString() }}
</p>

</div>