import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
import DetailInstruction from '../views/DetailInstruction.vue' 

Vue.use(VueRouter)

const routes = [{
    path: '/',
    name: 'home',
    meta: { title: 'Tube Steam | Home' },
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    component: () => import( /* webpackChunkName: "about" */ '../views/AboutView.vue')
  }, {
    path: '/detailInstruction',
    name: 'detailInstruction',
    meta: { title: 'Tube Steam | Create' },
    component: DetailInstruction
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})


router.beforeEach((to, from, next) => {
  console.log(to);
  document.title = to.meta.title;
  next();
});

export default router