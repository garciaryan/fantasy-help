<template>
  <div class="container flex-middle">
    <div class="row">
      <div class="col-md-12">
        <!-- Maybe a table to display data cleanly -->
        <ul class="player-list" v-for="(player) in players">
          <li :key="player">{{ player.player_name }} - {{ player.pts }}</li>
        </ul>
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
