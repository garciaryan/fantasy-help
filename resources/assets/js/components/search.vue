<template>
  <div class="row">
    <all-players :filteredPlayers="filteredPlayers"></all-players>
    <div class="row">
    <div class="col-md-12 search-component">
      <input type="text" v-on:keyup="searchPlayers()" v-model="search" placeholder="Search players" class="player-search">
    </div>
    </div>
  </div>
</template>

<script>
import allPlayers from './allPlayers.vue';

export default {
  mounted(){
    let self = this;
    axios.get('/api/players')
      .then(response => {
        self.players = response.data;
        self.filteredPlayers = response.data;
      }).catch(error => console.log(error));
  },

  data: function() {
    return {
      players: [],
      filteredPlayers:[],
      search: ''
    }
  },

  components: {
    allPlayers
  },

  methods:{
      searchPlayers(){
      let self = this;
      self.filteredPlayers = self.players.filter(player => {
        return player.player_name.toLowerCase().includes(self.search.replace(/ /g,'').toLowerCase())
      })
    }
  },

  computed: {
    
  }
}
</script>

