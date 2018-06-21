@extends ('layouts.app')

@section ('content')

<div class="row">
    <div class="col-sm-12">
        <div class="full-right">
        <center>
            <h2>Student Registration</h2>
            <h5>A simple CRUD app</h5>
        </center>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
@endif
<table class="table table-bordered">
    <tr>
        <th with="80px">No</td>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Course</th>
        <th with="140px" class="text-center">
            <a href="{{ route('students.create') }}" class="btn btn-success btn-sm">
                
                <i class="glyphicon glyphicon-plus"></i>

            </a>
        </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($student as $key=>$value)

    <tr>
        
        <td>{{ $no++ }}</td>
        <td>{{ $value->firstname }}</td>
        <td>{{ $value->middlename }}</td>
        <td>{{ $value->lastname }}</td>
        <td>{{ $value->course }}</td>
        <td>
            <a class="btn btn-info btn-sm" href="{{ route('students.show', $value->id) }}">
                <i class="glyphicon glyphicon-th-large"></i>
            </a>
            <a class="btn btn-primary btn-sm" href="{{ route('students.edit', $value->id) }}">
                <i class="glyphicon glyphicon-pencil"></i>
            </a>
            {!! Form::open(['method' => 'DELETE','route' => ['students.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>

    </tr>

    @endforeach

</table>

@endsection