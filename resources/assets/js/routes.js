import VueRouter from 'vue-router';
import allPlayers from './components/allPlayers.vue';
import newPlayer from './components/newPlayer.vue';
import home from './components/home.vue';

let routes = [
  {path: '/api/players', name: 'players', component: allPlayers},
  {path: '/compare', name: 'compare', component: newPlayer},
  {path: '/', name: 'home', component: home},

  //catch stray routes
  {path: '*', redirect: '/'}
];


export default new VueRouter({
  routes
});