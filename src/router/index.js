import Vue from 'vue'
import VueRouter from 'vue-router'
import VueRouteMiddleware from 'vue-route-middleware'

import HomeView from '../views/HomeView.vue'
import DetailInstruction from '../views/DetailInstruction.vue' 
import CreateInstruction from '../views/CreateInstruction.vue'
import Login from '../views/auth/Login.vue'

import guest from '../middleware/guest'
import auth from '../middleware/auth'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView,
    meta: {
      title: 'Home',
      middleware: [auth]
    }
  },
  {
    path: '/detailInstruction',
    name: 'detailInstruction',
    component: DetailInstruction,
    meta: {
      title: 'Detail Instruction',
      middleware: [auth]
    }
  }, 
  {
    path: '/createInstruction',
    name: 'createInstruction',
    component: CreateInstruction,
    meta: { 
       title: 'Create Instruction',
       middleware: [auth]
    }
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
    meta: {
      title: 'Login',
      type: 'auth',
      middleware: [guest]
    },
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

router.beforeEach(VueRouteMiddleware({ guest, auth }));
router.afterEach((to, from) => {
  document.title = `Tubestream | ${to.meta.title}`;
});

export default router