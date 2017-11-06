@extends('layouts.sidebar')

@section('title')
Listing
@endsection

@section('sidebar')
<div class="list-group">
  <a href="/" class="list-group-item list-group-item-action">View registration list</a>
  <a href="/register" class="list-group-item list-group-item-action">Add new registration</a>
</div>
@endsection

@section('content')
<h1>Register</h1>
@if($errors->any())
  <div class="alert alert-danger">
    Error(s) were found:
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@isset($status)
  <div class="alert alert-info">
    Registered for <b>{{ $registration['name'] }}</b>
  </div>
@endisset

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
