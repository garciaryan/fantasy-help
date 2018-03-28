
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 import axios from 'axios';
 import VueRouter from 'vue-router';
 import router from './routes.js';

require('./bootstrap');

window.Vue = require('vue');
window.axios = axios;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueRouter);

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('new-player', require('./components/newPlayer.vue'));
Vue.component('all-players', require('./components/allPlayers.vue'));
Vue.component('side-nav', require('./components/sideNav.vue'));
Vue.component('home', require('./components/home.vue'));
Vue.component('search', require('./components/search.vue'));
Vue.component('player-tabs', require('./components/playerTabs.vue'));

const app = new Vue({
    el: '#app',
    router,
});
