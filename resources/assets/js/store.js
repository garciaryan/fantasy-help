import Vuex from 'vuex';
window.Vue = require('vue');

Vue.use(Vuex);

const store = new Vuex.Store({
  state: {
    count: 0,
    loading: true,
    selectedPlayersID: []
  },
  mutations: {
    increment(state){
      state.count++;
    },
    decrement(state){
      state.count--;
    },
    loaded(state){
      state.loading = false;
    },
    loading(state){
      state.loading = true;
    }
  }
});

export default store;