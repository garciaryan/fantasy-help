<template>
  <div class="container flex-middle">
    <div class="row">
      <div class="col-md-12">
        <!-- Maybe a table to display data cleanly -->
        <table class="player-table">
          <tr>
            <th>Name</th>
            <th>Points</th>
            <th>FG%</th>
          </tr>
          <tr v-for="player in players" :key="player.id">
            <td>{{ player.player_name }}</td>
            <td>{{ player.pts }}</td>
            <td>{{ player.fg_pct }}</td>
          </tr>
        </table>
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
