<div class="row">
  <div class="col-sm-2">
    {!! form::label('firstname','First Name') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('firstname') ? 'has-error' : "" }}">
      {{ Form::text('firstname',NULL, ['class'=>'form-control', 'id'=>'firstname', 'placeholder'=>'']) }}
      {{ $errors->first('firstname', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('middlename','Middle Name') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('middlename') ? 'has-error' : "" }}">
      {{ Form::text('middlename',NULL, ['class'=>'form-control', 'id'=>'middlename', 'placeholder'=>'']) }}
      {{ $errors->first('middlename', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('lastname','Last Name') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : "" }}">
      {{ Form::text('lastname',NULL, ['class'=>'form-control', 'id'=>'lastname', 'placeholder'=>'']) }}
      {{ $errors->first('middlename', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('course','Course') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('course') ? 'has-error' : "" }}">
      {{ Form::text('course',NULL, ['class'=>'form-control', 'id'=>'course', 'placeholder'=>'']) }}
      {{ $errors->first('course', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>