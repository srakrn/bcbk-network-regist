@extends('layouts.2_col')

@section('title')
Listing
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

<form method="POST" action="/add">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="id">Citizen ID</label>
    <input class="form-control" id="id" name="id" placeholder="1234567890123" autofocus>
  </div>
  <div class="form-group">
    <label for="login_id">Internet Username</label>
    <input class="form-control" id="login_id" name="login_id" placeholder="12345">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" placeholder="John Smith">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input class="form-control" id="phone" name="phone" placeholder="0812345678">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
