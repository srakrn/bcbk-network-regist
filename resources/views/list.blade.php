@extends('layouts.2_col')

@section('title')
Listing
@endsection

@section('content')
<h1>Listing</h1>
@foreach ($registrations as $registration)
    <p>{{ $registration['name'] }}</p>
@endforeach
@endsection

@section('sidebar')
eiei
@endsection
