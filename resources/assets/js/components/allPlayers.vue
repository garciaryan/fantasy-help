<template>
  <div class="container flex-middle">
    <div class="row">
      <div class="col-md-12">
        <!-- <span v-for="player in players" :key="player">
          {{ players.player_name }}
        </span> -->
      </div>
    </div>
  </div>
</template>



<script>
export default {
  mounted(){
    let self = this;
    axios.get('players')
      .then(response => {
        self.players = response.data;
        console.log(response);
      }).catch(error => console.log(error))
  },

  data: function() {
    return {
      players: []
    }
  }
}
</script>
