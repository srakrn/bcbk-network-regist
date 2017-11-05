@extends('layouts.2_col')

@section('title')
Listing
@endsection

@section('content')
<h1>Register</h1>
<form method="POST" action="/register">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Citizen ID</label>
    <input class="form-control" id="id" name="id" placeholder="1234567890123">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input class="form-control" id="name" name="name" placeholder="John Smith">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Internet Username</label>
    <input class="form-control" id="login_id" name="login_id" placeholder="u0000000000">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@section('sidebar')
eiei
@endsection
