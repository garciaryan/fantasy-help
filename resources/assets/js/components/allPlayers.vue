<template>
  <div class="col-md-10 table-container">
    <div class="table-hover table-condensed table-responsive">
      <float-thead-table position="sticky" class="table" style="table-layout: fixed;">
        <thead class="players-header">
          <tr>
            <th class="name" @click="sort('player_name')">Name
              <svg v-if="currentSortDir === 'desc' && currentSort === 'player_name'" class="first-col" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg>
              <svg v-if="currentSortDir === 'asc' && currentSort === 'player_name'" class="first-col" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </th>
            <th @click="sort('team_abbreviation')">Team
              <span><svg v-if="currentSortDir === 'desc' && currentSort === 'team_abbreviation'" class="column-arrow team-col" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort === 'team_abbreviation'" class="column-arrow team-col" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('fga')">FGA
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='fga'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='fga'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('fgm')">FGM
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='fgm'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='fgm'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('fg_pct')">FG%
              <span><svg v-if="currentSortDir === 'desc' && currentSort === 'fg_pct'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='fg_pct'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('fg3a')">3PA
              <span><svg v-if="currentSortDir === 'desc' && currentSort === 'fg3a'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='fg3a'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('fg3m')">3PM
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='fg3m'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='fg3m'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('fg3_pct')">3P%
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='fg3_pct'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='fg3_pct'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('pts')">PTS
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='pts'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='pts'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('reb')">REB
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='reb'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort === 'reb'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('ast')">AST
              <span><svg v-if="currentSortDir === 'desc' && currentSort === 'ast'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort === 'ast'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('stl')">ST
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='stl'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='stl'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('blk')">BLK
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='blk'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='blk'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
            <th @click="sort('tov')">TO
              <span><svg v-if="currentSortDir === 'desc' && currentSort ==='tov'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg></span>
              <span><svg v-if="currentSortDir === 'asc' && currentSort ==='tov'" class="column-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></span>
            </th>
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

