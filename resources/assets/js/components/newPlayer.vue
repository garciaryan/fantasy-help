<template>
  <div class="col-md-12">
    
    <draggable v-model="selectedPlayersID">
      <transition-group class="flx-center">
        <md-card v-for="player in selectedPlayersID" :key="player.id" md-with-hover>
          <md-card-header>
            <md-card-header-text>
              <div class="md-title">{{ player.player_name }}</div>
              <div class="md-subhead">{{ player.team_abbreviation }}</div>
            </md-card-header-text>
            <!-- <md-card-media>
              <img src="" alt="">
            </md-card-media> -->
          </md-card-header>
          <md-card-content>
            <div>PTS: {{ player.pts }}</div>
            <div>AST: {{ player.ast}}</div>
            <div>REB: {{ player.reb }}</div>
            <div>BLK: {{ player.blk }}</div>
            <div>TOV: {{ player.tov }}</div>
            <div>STL: {{ player.stl }}</div>
            <div>Fantasy Pts: {{ player.nba_fantasy_pts }}</div>
            <div>3PT%: {{ player.fg3_pct }}</div>
            <div>3PA: {{ player.fg3a }}</div>
            <div>3PM: {{ player.fg3m }}</div>
            <div>FG%: {{ player.fg_pct }}</div>
            <div>FGA: {{ player.fga }}</div>
            <div>FGM: {{ player.fgm }}</div>
            <div>Fantasy Pts Rank: {{ player.nba_fantasy_pts_rank }}</div>
            <div>PTS Rank: {{ player.pts_rank }}</div>
          </md-card-content>
        </md-card>
      </transition-group>
    </draggable>
  </div>
</template>

<script>
import draggable from 'vuedraggable';

export default {

  mounted(){
    if (this.selectedPlayersID.length < 1){
      this.noPlayers();
    }
    // let picUrl = 'https://nba-players.herokuapp.com/players/';
    // axios.get(picUrl)
  },

  data() {
    return {
      selectedPlayersID: this.$store.state.selectedPlayersID
    }
  },

  methods: {
    noPlayers(){
      this.$swal({
        type: 'error',
        title: 'No players selected!',
        text: 'Select some players to compare by clicking \'All Players\''
      });
    }
  },

  components: {
    draggable
  }
}
</script>
