import VueRouter from 'vue-router';
import allPlayers from './components/allPlayers.vue';
import newPlayer from './components/newPlayer.vue';

let routes = [
  {path: '/players', name: 'players', component: allPlayers},
  {path: '/compare', name: 'compare', component: newPlayer}
];


export default new VueRouter({
  routes
});