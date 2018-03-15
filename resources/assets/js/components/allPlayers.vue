<template>
  <div class="container flex-middle">
    <div class="row">
      <div class="col-md-12">
        <span v-for="player in players" :key="player">
          {{ player.player_name }}
        </span>
      </div>
    </div>
  </div>
</template>



<script>
export default {
  mounted(){
    let self = this;
    axios.get('/api/players')
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
