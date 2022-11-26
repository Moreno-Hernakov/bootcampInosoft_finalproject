import Vue from 'vue'
import VueRouter from 'vue-router'
import VueRouteMiddleware from 'vue-route-middleware'

import HomeView from '../views/HomeView.vue'
import DetailInstruction from '../views/DetailInstruction.vue' 
import Login from '../views/auth/Login.vue'

import guest from '../middleware/guest'
import auth from '../middleware/auth'

Vue.use(VueRouter)

const routes = [{
    path: '/',
    name: 'home',
    meta: {
      title: 'Home',
      middleware: [auth]
    },
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    component: () => import( /* webpackChunkName: "about" */ '../views/AboutView.vue'),
    meta: {
      title: 'About',
      middleware: [auth]
    }
  },
  {
    path: '/detailInstruction',
    name: 'detailInstruction',
    meta: {
      title: 'Create',
      middleware: [auth]
    },
    component: DetailInstruction
  },
  {
    path: '/login',
    name: 'login',
    meta: {
      title: 'Login',
      type: 'auth',
      middleware: [guest]
    },
    component: Login
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