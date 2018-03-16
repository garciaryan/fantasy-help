<template>
  <div class="container-fluid flex-middle">
    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-primary" data-target="#add-player" id="add-player" v-on:click="show = !show">Add Player <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
      </div>
      <transition name="slide">
        <div class="col-md-6" v-if="show">new player</div>
      </transition>
    </div>
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6"></div>
    </div>
  </div>
</template>

<script>
export default {

  data: function() {
    return {
      show: false,
      players:[]
    }
  }
}
</script>
