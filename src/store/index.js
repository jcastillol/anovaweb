import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    rutas:[
      {nombre:'img/header.png', img: 'Empresarial'},
      {nombre:'img/punto/fondo.png'},

    ],
    id: 0
  },
 
  mutations: {
    modificarid(state, n)
    {
     state.id = n
    }
  },
  actions: {
  },
  modules: {
  }
})
