import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
 
  {
    path: '/puntodeventa',
    name: 'Puntodeventa',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import('../views/Puntodeventa.vue')
  },
  {
    path: '/empresarial',
    name: 'Empresarial',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import('../views/Empresarial.vue')
  },
 
  {
    path: '/precios',
    name: 'Precios',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import('../views/Precios.vue')
  },
  {
    path: '/soporte',
    name: 'Soporte',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import('../views/Soporte.vue')
  }
]

const router = new VueRouter({
  routes,
  mode: 'history'

})

export default router
