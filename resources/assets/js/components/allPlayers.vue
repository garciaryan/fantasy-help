<template>
  <div class="col-md-10 table-container">
    <div class="table-hover table-condensed table-responsive">
      <table class="table">
        <thead class="players-header">
          <tr>
            <th>Name</th>
            <th>Team</th>
            <th>FGA</th>
            <th>FGM</th>
            <th>FG%</th>
            <th>3PTA</th>
            <th>3PTA</th>
            <th>3PT%</th>
            <th>PTS</th>
            <th>REB</th>
            <th>AST</th>
            <th>ST</th>
            <th>BLK</th>
            <th>TO</th>
          </tr>
        </thead>
        <tr v-for="player in players" :key="player.id">
          <td>{{ player.player_name }}</td>
          <td>{{ player.team_abbreviation }}</td>
          <td>{{ player.fta }}</td>
          <td>{{ player.ftm }}</td>
          <td>{{ player.fg3a }}</td>
          <td>{{ player.fg3m }}</td>
          <td>{{ player.fg3_pct }}</td>
          <td>{{ player.fg_pct }}</td>
          <td>{{ player.pts }}</td>
          <td>{{ player.reb }}</td>
          <td>{{ player.ast }}</td>
          <td>{{ player.stl }}</td>
          <td>{{ player.blk }}</td>
          <td>{{ player.tov }}</td>
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
      }).catch(error => console.log(error));

    // let $table = $('.table'); 
    // $table.floatThead();
  },

  data: function() {
    return {
      players: []
    }
  }
}
</script>
