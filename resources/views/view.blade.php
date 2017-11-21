@extends('layouts.2_col')

@section('title')
Listing
@endsection

@section('content')
<h1>Details: {{ $registration['id'] }}</h1>
<h2>Name</h2>
<p>{{ $registration['name'] }}</p>
<h2>Assigned KUWIN Login</h2>
<p>{{ $registration['login_id'] }}</p>
@endsection
