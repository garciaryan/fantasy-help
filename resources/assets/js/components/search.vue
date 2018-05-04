<template>
  <div class="row-full-width">
    <div class="row row-full-width all-players-container">
      <all-players :filteredPlayers="filteredPlayers"
                  :sort="sort"
                  :currentSort="currentSort"
                  :active="active"
                  :showPlus="showPlus"
                  :currentSortDir="currentSortDir" 
                  :sortedPlayers="sortedPlayers"
                  >
      </all-players>
      <!-- Find a new spinner, md isnt working -->
      <vue-simple-spinner class="z-top spinner" size="huge" text-fg-color="#FFFFFF" message="Updating player stats..." v-if="checkLoading()"></vue-simple-spinner>
    </div>
    <div class="row row-full-width search-container">
      <div class="col-md-6 flx-end">
        <md-field class="player-search">
          <label>Search players...</label>
          <md-input type="text" v-on:keyup="searchPlayers()" v-model="search" ></md-input>
        </md-field>
      </div>
      <selected-players class="col-md-6 flx-select"></selected-players>
    </div>
  </div>
</template>

<script>
import Vue from 'vue';
import allPlayers from './allPlayers.vue';
import selectedPlayers from './selectedPlayers.vue';
import Spinner from 'vue-simple-spinner';


export default {

  mounted(){
    let self = this;
    axios.get('/api/players')
      .then(response => {
        self.players = response.data;
        self.filteredPlayers = response.data;
      }).catch(error => console.log(error));
  },

  data() {
    return {
      players: [],
      filteredPlayers:[],
      search: '',
      currentSort: 'name',
      currentSortDir: 'desc',
      active: false,
    }
  },

  components: {
    allPlayers,
    selectedPlayers,
    Spinner
  },

  methods:{
    searchPlayers(){
      let self = this;
      self.filteredPlayers = self.players.filter(player => {
        return player.player_name.toLowerCase().includes(self.search.toLowerCase())
      })
    },

    sort(s) {
      if(s === this.currentSort){
        this.currentSortDir = this.currentSortDir ==='desc' ? 'asc' : 'desc';
      }
      this.currentSort = s;
    },

    showPlus(player){
      this.active = player.id;
    },

    checkLoading(){
      return this.$store.state.loading;
    }

  },

  computed: {
    sortedPlayers(){
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

