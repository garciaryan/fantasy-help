@extends('layouts.app')

@section('content')


<div class="container-fluid flex-center">
  <side-nav></side-nav>
  <div class="container flex-middle">
    <div class="row">
      <div class="col-md-6 text-center">
        <router-link to="/compare" class="nav-link"><h1>Compare Players</h1></router-link>
      </div>
      <div class="col-md-6 text-center">
        <router-link to="/" class="nav-link"><h1>View Trends</h1></router-link>
      </div>
    </div>
  </div>
  <router-view></router-view>
</div>
@endsection
