<template>
  <div class="row row-full-width">
    <all-players :filteredPlayers="filteredPlayers"
                :sort="sort"
                :currentSort="currentSort"
                :active="active"
                :showPlus="showPlus"
                :currentSortDir="currentSortDir" 
                :sortedPlayers="sortedPlayers">
    </all-players>
    <div class="col-md-12 flx-end">
      <input type="text" v-on:keyup="searchPlayers()" v-model="search" placeholder="Search players" class="player-search">
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
      currentSortDir: 'desc',
      active: false
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
    },

    showPlus: function(player){
      this.active = player.id;
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

