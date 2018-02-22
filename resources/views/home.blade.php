@extends('layouts.app')

@section('content')


<div class="container-fluid flex-center">
@include('partials.sidenav')
  <div class="container flex-middle">
    <div class="row">
      <div class="col-md-6 text-center">
        <a href="{{ url('/compare') }}" class="nav-link"><h1>Compare Players</h1></a>
      </div>
      <div class="col-md-6 text-center">
        <a href="#" class="nav-link"><h1>View Trends</h1></a>
      </div>
    </div>
  </div>
</div>
@endsection
