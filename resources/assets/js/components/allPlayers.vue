<template>
  <div class="col-md-10 table-container">
    <div class="table-hover table-condensed table-responsive">
      <float-thead-table position="sticky" class="table" style="table-layout: fixed;">
        <thead class="players-header">
          <tr>
            <th class="name" @click="sort('player_name')">Name</th>
            <th @click="sort('team_abbreviation')">Team</th>
            <th @click="sort('fga')">FGA</th>
            <th @click="sort('fgm')">FGM</th>
            <th @click="sort('fg_pct')">FG%</th>
            <th @click="sort('fg3a')">3PTA</th>
            <th @click="sort('fg3m')">3PTM</th>
            <th @click="sort('fg3_pct')">3PT%</th>
            <th @click="sort('pts')">PTS</th>
            <th @click="sort('reb')">REB</th>
            <th @click="sort('ast')">AST</th>
            <th @click="sort('stl')">ST</th>
            <th @click="sort('blk')">BLK</th>
            <th @click="sort('tov')">TO</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="player in sortedPlayers" :key="player.id">
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
    'sortedPlayers',
    'sort',
    'currentSort',
    'currentSortDir'
  ],

  components: {
    FloatThead
  }
}
</script>

