import Vue from 'vue'
import App from './App.vue'
import router from './router'
import './assets/css/sidebar.css';
import axios from 'axios'
import VueAxios from 'vue-axios'
import store from './store'
import './assets/css/tailwind.css'

axios.defaults.withCredentials = true
axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
axios.defaults.headers.common['Content-Type'] = 'application/json'
axios.defaults.headers.common['Accept'] = 'application/json'
axios.defaults.baseURL = 'http://localhost:8000/api/'


const token = localStorage.getItem('token')
if(token){
  axios.defaults.headers.common['Authorization'] = token
}

// manage error and expire token
axios.interceptors.response.use(undefined, function (error) {
  if (error) {
    const originalRequest = error.config;
    if (error.response.status === 401 && !originalRequest._retry && !error.response.data.message) {
      originalRequest._retry = true;
      store.dispatch('logout')
      return router.push({name: 'login'})
    }
    else{
      store.commit('handle_error',error.response.data.message);
    }
  }
})
window.axios = axios

Vue.use(VueAxios, axios)
Vue.config.productionTip = false

new Vue({
  store,
  router,
  render: h => h(App)
}).$mount('#app')
