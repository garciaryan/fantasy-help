<template>
  <div>
    <md-list>
      <transition-group name="fade">
        <md-list-item v-for="player in selectedPlayersID" :key="player.id">
          <md-icon>remove_circle</md-icon>
          {{ player.player_name }}
        </md-list-item>
      </transition-group>
    </md-list>
  </div>
</template>

<script>
export default {
  data(){
    return {
      selectedPlayersID: this.$store.state.selectedPlayersID
    }
  },
}
</script>

