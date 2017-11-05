@extends('layouts.2_col')

@section('title')
Listing
@endsection

@section('content')
<h1>Listing</h1>
<table class="table">
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

@section('sidebar')
eiei
@endsection
