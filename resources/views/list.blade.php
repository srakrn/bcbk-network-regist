@extends('layouts.2_col')

@section('title')
Listing
@endsection

@section('content')
<h1>Listing</h1>
@if(isset($status))
  <div class="alert alert-danger">
    @if($status=="delete_success")
      Deleted registration of {{ $name }}
    @endif
  </div>
@endif
<table class="table display" id="list_table">
  <thead>
    <tr>
      <td scope="col">Citizen ID</td>
      <td scope="col">Name</td>
      <td scope="col">Registered username</td>
      <td scope="col">View</td>
      <td scope="col">Delete</td>
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
