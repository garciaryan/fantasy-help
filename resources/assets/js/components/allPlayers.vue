<template>
  <div class="col-md-10 table-container">
    <div class="table-hover table-condensed table-responsive">
      <float-thead-table position="sticky" class="table" style="table-layout: fixed;">
        <thead class="players-header">
          <th class="name">Name</th>
          <th>Team</th>
          <th>FGA</th>
          <th>FGM</th>
          <th>FG%</th>
          <th>3PTA</th>
          <th>3PTM</th>
          <th>3PT%</th>
          <th>PTS</th>
          <th>REB</th>
          <th>AST</th>
          <th>ST</th>
          <th>BLK</th>
          <th>TO</th>
        </thead>
        <tbody>
          <tr v-for="player in filteredPlayers" :key="player.id">
            <td class="name">{{ player.player_name }}</td>
            <td>{{ player.team_abbreviation }}</td>
            <td>{{ player.fga }}</td>
            <td>{{ player.fgm }}</td>
            <td>{{ player.fg_pct }}</td>
            <td>{{ player.fg3a }}</td>
            <td>{{ player.fg3m }}</td>
            <td>{{ player.fg3_pct }}</td>
            <td>{{ player.pts }}</td>
            <td>{{ player.reb }}</td>
            <td>{{ player.ast }}</td>
            <td>{{ player.stl }}</td>
            <td>{{ player.blk }}</td>
            <td>{{ player.tov }}</td>
          </tr>
        </tbody>
      </float-thead-table>
    </div>
  </div>
</template>

<script>
import FloatThead from 'vue-floatthead';
import Vue from 'vue';

Vue.use(FloatThead);

export default {
  props: [
    'player',
    'filteredPlayers'
  ],

  components: {
    FloatThead
  }
}
</script>

