@extends('layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add User
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('persons.store') }}">
          <div class="form-group">
              @csrf
              <label for="FirstName">First Name</label>
              <input type="text" class="form-control" name="FirstName"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="SecondName">Second Name</label>
              <input type="text" class="form-control" name="SecondName"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="ThirdName">Third Name</label>
              <input type="text" class="form-control" name="ThrdName"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="FourthName">Fourth Name</label>
              <input type="text" class="form-control" name="FourthName"/>
          </div>
          <div class="form-group">
              <label for="PersonalEmail">Email</label>
              <input type="email" class="form-control" name="PersonalEmail"/>
          </div>
          <div class="form-group">
              <label for="RaqamQawmy">National ID</label>
              <input type="number" class="form-control" name="RaqamQawmy"/>
          </div>
        <div class="form-group">
            <label for="ScoutJoiningYear">Scout Joining Year</label>
            <input type="number" class="form-control" name="ScoutJoiningYear"/>
        </div>
        <div class="form-group">
            <label for="DateOfBirth">DOB</label>
            <input type="DatePicker" class="form-control" name="DateOfBirth"/>
        </div>
          <button type="submit" class="btn btn-block btn-danger">Create User</button>
      </form>
  </div>
</div>
@endsection