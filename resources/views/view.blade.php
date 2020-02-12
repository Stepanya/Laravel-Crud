@extends('layouts.app')

@section('content')
  <div class="flex-center position-ref full-height">
    <div class="content">
      <p><b>Name</b>: {{ $user->name }}</p>
      <p><b>Age</b>: {{ $user->age }}</p>
      <p><b>Email</b>: {{ $user->email }}</p>
      <p><b>Contact No</b>: {{ $user->contact }}</p>
    </div>
  </div>
@endsection
