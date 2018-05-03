<template>
  <div>
    <!-- <md-list>
      <transition-group name="fade">
        <md-list-item v-for="player in selectedPlayersID" :key="player.id">
          <md-icon>remove_circle</md-icon>
          {{ player.player_name }}
        </md-list-item>
      </transition-group>
    </md-list> -->
    <div v-for="player in selectedPlayersID" :key="player.id">
      <md-chip class="chip-theme" md-deletable @click="deselectPlayer(player)">{{ player.player_name }}</md-chip>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      selectedPlayersID: this.$store.state.selectedPlayersID
    }
  },

  methods: {
    deselectPlayer(player){
      let index = this.$store.state.selectedPlayersID.indexOf(player);
      let removed = this.$store.state.selectedPlayersID.splice(index, 1)[0];
      this.decrement();
      console.log(this.$store.state.selectedPlayersID);
      console.log(`${removed.player_name} removed.`);
      return this.$store.state.selectedPlayersID;
    },

    decrement(){
      return this.$store.commit('decrement');
    }
  }
}
</script>

