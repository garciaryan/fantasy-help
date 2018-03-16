<template>
  <div class="col-md-10 table-container">
    <div class="table-hover table-condensed table-responsive">
      <table class="table">
        <tr>
          <th>Name</th>
          <th>Team</th>
          <th>FG%</th>
          <th>Pts</th>
          <th>Reb</th>
          <th>Ast</th>
        </tr>
        <tr v-for="player in players" :key="player.id">
          <td>{{ player.player_name }}</td>
          <td>{{ player.team_abbreviation }}</td>
          <td>{{ player.fg_pct }}</td>
          <td>{{ player.pts }}</td>
          <td>{{ player.reb }}</td>
          <td>{{ player.ast }}</td>
        </tr>
      </table>
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
