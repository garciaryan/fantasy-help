@extends('layouts.app')

@section('content')


<div class="container-fluid flex-center">
@include('partials.sidenav')
  <div class="container flex-middle">
    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-primary" data-toggle="collapse" data-target="#add-player">Add Player <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
      </div>
      <div class="col-md-6"></div>
    </div>
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6"></div>
    </div>
  </div>
</div>
@endsection