@extends('layouts.app')

@section('content')
  <div class="flex-center full-height">
    <div class="content">
    	<form action="/edit/{{ $user->id }}" method="post">
        {{ csrf_field() }}
    		<div class="row form-group">
    			<div class="col-sm">
    				<label>Name: </label>
    				<input type="text" name="name" class="form-control form-control-sm" value="{{ $user->name }}">
    			</div>
    			<div class="col-sm">
    				<label>Age: </label>
    				<input type="text" name="age" class="form-control form-control-sm" value="{{ $user->age }}">
    			</div>
    			<div class="col-sm">
    				<label>Email: </label>
    				<input type="text" name="email" class="form-control form-control-sm" value="{{ $user->email }}">
    			</div>
    			<div class="col-sm">
    				<label>Contact No.: </label>
    				<input type="text" name="contact" class="form-control form-control-sm" value="{{ $user->contact }}">
    			</div>
    		</div>
    		<div class="row form-group">
          <div class="col-sm">
            <button class="btn btn-success btn-block">Confirm Changes</button>
          </div>
			    <div class="col-sm">
            <a href="/crud" class="btn btn-primary btn-block"> Return </a>
          </div>
    		</div>
    	</form>
    </div>
  </div>
@endsection
