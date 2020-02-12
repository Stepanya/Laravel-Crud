@extends('layouts.app')

@section('content')
  <div class="flex-center full-height">
    <div class="content">
    	<form action="/add" method="post">
        {{ csrf_field() }}
    		<div class="row form-group">
    			<div class="col-sm">
    				<label>Name: </label>
    				<input type="text" name="name" class="form-control form-control-sm">
    			</div>
    			<div class="col-sm">
    				<label>Age: </label>
    				<input type="text" name="age" class="form-control form-control-sm">
    			</div>
    			<div class="col-sm">
    				<label>Email: </label>
    				<input type="text" name="email" class="form-control form-control-sm">
    			</div>
    			<div class="col-sm">
    				<label>Contact No.: </label>
    				<input type="text" name="contact" class="form-control form-control-sm">
    			</div>
    		</div>
    		<div class="row form-group">
    			<button class="btn btn-success btn-block">Submit</button>
    		</div>
    	</form>
    </div>
  </div>
@endsection
