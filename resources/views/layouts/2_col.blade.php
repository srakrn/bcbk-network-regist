@extends('layouts.base')

@section('main')
  <div class="row">
    <div class="col-8">
      @yield('content')
    </div>
    <div class="col-4">
      <h2>Menu</h2>
      <div class="list-group">
        <a href="/" class="list-group-item list-group-item-action {{ (Request::is('/') ? 'list-group-item-primary' : '') }}">View registration list</a>
        <a href="/register" class="list-group-item list-group-item-action {{ (Request::is('register') ? 'list-group-item-primary' : '') }}">Add new registration</a>
      </div>
    </div>
  </div>
@endsection
