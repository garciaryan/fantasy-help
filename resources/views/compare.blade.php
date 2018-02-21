@extends('layouts.app')

@section('content')

@include('partials.sidenav')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <button class="btn btn-primary" data-toggle="collapse" data-target="#add-player">Add Player</button>
    </div>
    <div class="col-md-6"></div>
  </div>
  <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6"></div>
  </div>
</div>
@endsection