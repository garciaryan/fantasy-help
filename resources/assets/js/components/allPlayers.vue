<template>
  <div class="container flex-middle">
    <div class="row">
      <div class="col-md-12">
        <!-- <p v-for="player in players" :key="player">
          {{ player.name }}
        </p> -->
      </div>
    </div>
  </div>
</template>



<script>
export default {
  mounted(){
    let self = this;
    axios.get('players')
      .then(response => {
        self.players = response.data;
        console.log(self.players);
      }).catch(error => console.log(error))
  },

  data: function() {
    return {
      players: []
    }
  }
}
</script>
