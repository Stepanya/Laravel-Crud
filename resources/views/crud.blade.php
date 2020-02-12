
@extends('layouts.app')

@section('content')

  <div class="flex-center position-ref full-height">
  @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
  @endif

  <div class="content">
    <div class="title m-b-md">
        CRUD
        <a href="/add" class="btn btn-success btn-block"> + Add User </a>
    </div>

    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Contact</th>
        <th colspan="3">Actions</th>
      </tr>

      @if(count($users) > 0)

        @foreach ($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->contact }}</td>
            <td>
              <a href="/view/{{ $user->id }}" target="_blank" class="btn btn-primary"> View </a>
            </td>
            <td>
              <a href="/edit/{{ $user->id }}" class="btn btn-warning"> Edit </a>
            </td>
            <td>
              <a href="/delete" class="btn btn-danger delete" data-id="{{ $user->id }}" data-toggle="modal" data-target="#confirm"> Delete </a>
            </td>
          </tr>
        @endforeach 

      @else
        <tr><td colspan="7">There are currently no users</td></tr>
      @endif
    </table>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="confirm">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <a href="#" type="button" class="btn btn-danger link">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    $('.delete').click(function() {
      $('.link').attr('href', '/delete/'+$(this).data('id'))
    })
  </script>
@endsection
