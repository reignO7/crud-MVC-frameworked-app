@extends ('master')


@section ('content')

  
    <h1>Register Student</h1>

    <hr>

    <form method="POST" action="/students">
      <div>

        {{ csrf_field() }}

        <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
      <label for="middlename">Middle Name</label>
      <input type="text" class="form-control" id="middlename" name="middlename">
        </div>
        <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
      <label for="course">Course</label>
      <input type="text" class="form-control" id="course" name="course">
        </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </div>

  @include ('layouts/errors')

</form>


  

@endsection


