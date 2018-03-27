@extends('layouts.app')

@section('content')


<div class="container-fluid main">
  <!-- <div class="row"> -->
    <side-nav></side-nav>
    <router-view></router-view>
  <!-- </div> -->
</div>
@endsection
