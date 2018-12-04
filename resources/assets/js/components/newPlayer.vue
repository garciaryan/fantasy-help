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

            <md-card-media>
              <img :src="playerImg" alt="">
            </md-card-media>
            
          </md-card-header>
          <md-card-content>
            <div class="stats"><span>PTS: {{ player.pts }}</span></div>
            <div class="stats"><span>AST: {{ player.ast}}</span></div>
            <div class="stats"><span>REB: {{ player.reb }}</span></div>
            <div class="stats"><span>BLK: {{ player.blk }}</span></div>
            <div class="stats"><span>TOV: {{ player.tov }}</span></div>
            <div class="stats"><span>STL: {{ player.stl }}</span></div>
            <div class="stats"><span>Fantasy Pts: {{ player.nba_fantasy_pts }}</span></div>
            <div class="stats"><span>3PT%: {{ player.fg3_pct }}</span></div>
            <div class="stats"><span>3PA: {{ player.fg3a }}</span></div>
            <div class="stats"><span>3PM: {{ player.fg3m }}</span></div>
            <div class="stats"><span>FG%: {{ player.fg_pct }}</span></div>
            <div class="stats"><span>FGA: {{ player.fga }}</span></div>
            <div class="stats"><span>FGM: {{ player.fgm }}</span></div>
            <div class="stats"><span>Fantasy Pts Rank: {{ player.nba_fantasy_pts_rank }}</span></div>
            <div class="stats"><span>PTS Rank: {{ player.pts_rank }}</span></div>
          </md-card-content>
        </md-card>
      </transition-group>
    </draggable>
  </div>
</template>

<script>
import draggable from 'vuedraggable';
import router from '../routes.js';

export default {

  mounted(){
    if (this.selectedPlayersID.length < 1){
      this.noPlayers();
    }
    const picUrl = 'https://nba-players.herokuapp.com/players/';
    let players = this.$store.state.selectedPlayersID;
    players.forEach(player => {
      let name = player.player_name.split(" ");
      let firstName = name[0];
      let lastName = name[name.length -1];
      let URL = `${picUrl}${lastName}/${firstName}`;
      console.log(`${picUrl}${lastName}/${firstName}`);
      
      axios.get(`${picUrl}${lastName}/${firstName}`, {responseType: 'arraybuffer'})
        .then(res => {
          console.log(res);
          this.playerImg = Buffer.from(res.data, 'binary').toString('base64');
          console.log(this.playerImg);
        })
    });
  },

  data() {
    return {
      selectedPlayersID: this.$store.state.selectedPlayersID,
      playerImg: ''
    }
  },

  methods: {
    noPlayers(){
      this.$swal({
        type: 'error',
        title: 'No players selected!',
        text: 'Select some players to compare.',
        confirmButtonText: 'Start'
      }).then(res => {
        if (res.value){
          router.push('players');
        }
      })
    }
  },

  components: {
    draggable
  }
}
</script>
