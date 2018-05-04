<template>
  <div class="col-md-12 flx-center">
    <md-card v-for="player in selectedPlayersID" :key="player.id" md-with-hover>
      <md-ripple>
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
          <div>Fantasy Points: {{ player.nba_fantasy_pts }}</div>
        </md-card-content>
      </md-ripple>
    </md-card>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedPlayersID: this.$store.state.selectedPlayersID
    }
  }
}
</script>
