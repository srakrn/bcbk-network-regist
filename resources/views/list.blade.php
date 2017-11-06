@extends('layouts.2_col')

@section('sidebar')
<div class="list-group">
  <a href="/" class="list-group-item list-group-item-action">View registration list</a>
  <a href="/register" class="list-group-item list-group-item-action">Add new registration</a>
</div>
@endsection

@section('title')
Listing
@endsection

@section('content')
<h1>Listing</h1>
<table class="table display" id="list_table">
  <thead>
    <tr>
      <td scope="col">Citizen ID</td>
      <td scope="col">Name</td>
      <td scope="col">Registered username</td>
    </tr>
  </thead>
  <tbody>
  @foreach ($registrations as $registration)
    <tr>
      <td>{{ $registration['id'] }}</td>
      <td>{{ $registration['name'] }}</td>
      <td>{{ $registration['login_id'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection

@section('scripts')
<script>
$(document).ready( function () {
    $('#list_table').DataTable();
} );
</script>
@endsection
