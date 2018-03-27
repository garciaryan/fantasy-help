<template>
  <div class="row">
    <all-players :filteredPlayers="filteredPlayers"
                 :sort="sort"
                 :currentSort="currentSort"
                 :currentSortDir="currentSortDir" 
                 :sortedPlayers="sortedPlayers">
    </all-players>
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
      search: '',
      currentSort: 'name',
      currentSortDir: 'desc'
    }
  },

  components: {
    allPlayers
  },

  methods:{
    searchPlayers(){
      let self = this;
      self.filteredPlayers = self.players.filter(player => {
        return player.player_name.toLowerCase().includes(self.search.toLowerCase())
      })
  },

    sort: function(s) {
      if(s === this.currentSort){
        this.currentSortDir = this.currentSortDir ==='desc' ? 'asc' : 'desc';
      }
      this.currentSort = s;
    }

  },

  computed: {
    sortedPlayers: function(){
      return this.filteredPlayers.sort((a,b) => {
        let modifier = 1;
        if (this.currentSortDir === 'asc') modifier = -1;
        if (a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
        if (a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
        return 0;
      })
    }
  }
}
</script>

