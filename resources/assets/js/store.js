import Vuex from 'Vuex';
window.Vue = require('vue');

Vue.use(Vuex);

const store = new Vuex.Store({
  state: {
    count: 0
  },
  mutations: {
    increment: state => state.count++
  }
});

export default store;