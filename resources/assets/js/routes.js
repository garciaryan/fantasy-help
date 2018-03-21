import VueRouter from 'vue-router';
import allPlayers from './components/allPlayers.vue';
import newPlayer from './components/newPlayer.vue';
import home from './components/home.vue';
import search from './components/search.vue';

let routes = [
  {path: '/players', name: 'players', component: search},
  {path: '/compare', name: 'compare', component: newPlayer},
  {path: '/', name: 'home', component: home},

  //catch stray routes
  {path: '*', redirect: '/'}
];


export default new VueRouter({
  routes
});