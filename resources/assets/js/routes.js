import VueRouter from 'vue-router';
import allPlayers from './components/allPlayers.vue';
import newPlayer from './components/newPlayer.vue';
import search from './components/search.vue';

let routes = [
  {path: '/players', name: 'players', component: search},
  {path: '/compare', name: 'compare', component: newPlayer},
  {path: '/last-season', name: 'last-season', component: search},
  {path: '/', name: 'search', component: search},

  //catch stray routes
  {path: '*', redirect: '/'}
];


export default new VueRouter({
  routes
});