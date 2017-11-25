@extends('layouts.2_col')

@section('title')
Listing
@endsection

@section('content')
<h1>Registration Details</h1>
<table class="table">
  <tbody>
    <tr>
      <th scope="row">Citizen ID</th>
      <td>{{ $registration['id'] }}</td>
    </tr>
    <tr>
      <th scope="row">Name</th>
      <td>{{ $registration['name'] }}</td>
    </tr>
    <tr>
      <th scope="row">KU Login ID</th>
      <td>{{ $registration['login_id'] }}</td>
    </tr>
    <tr>
      <th scope="row">Phone</th>
      <td>{{ $registration['phone'] }}</td>
    </tr>
  </tbody>
</table>
@endsection
