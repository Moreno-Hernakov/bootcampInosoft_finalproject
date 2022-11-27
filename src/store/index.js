import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    status: '',
    token: localStorage.getItem('token') || '',
    user : {},
    error : '',
  },
  mutations: {
    auth_request(state){
      state.status = 'loading'
    },
    auth_success(state, token){
      state.status = 'success'
      state.token = token
    },
    set_user(state,user){
      state.user = user
    },
    handle_error(state,error){
      state.error = error
    },
    logout(state){
      state.status = ''
      state.token = ''
    },
  },
  actions: {
    login({commit}, user) {
        return new Promise((resolve, reject) => {
          commit('auth_request')
          axios({url: 'auth/login', data: user, method: 'POST' })
            .then(res => {
              if (res.data.success) { 
                const token = 'Bearer '+res.data.access_token
                const user = res.data.user
                localStorage.setItem('token', token)
                localStorage.setItem('user', JSON.stringify(user))
                axios.defaults.headers.common['Authorization'] = `Bearer ${token}`
                commit('auth_success', token)
                commit('set_user',user)
                commit('handle_error', '')
                resolve(res)
              } else {
                commit('handle_error', res.data.message)
                localStorage.removeItem('token')
                reject(res)
              }
          })
          .catch(err => {
            localStorage.removeItem('token')
            reject(err)
          })
        })
    },
    logout({commit}){
      return new Promise((resolve, reject) => {
        commit('logout')
        localStorage.removeItem('token')
        localStorage.removeItem('user')
        delete axios.defaults.headers.common['Authorization']
        resolve()
      })
    },

    getUser({commit}){
      return new Promise((resolve, reject) => {
        axios({url:'auth/user',method:'GET'}).then(res =>{
          commit('set_user', res.data)
          resolve(res)
        })
      }); 
    }
  },
  getters : {
    isLoggedIn: state => !!state.token,
    authStatus: state => state.status,
    getUser: state=> state.user,
    getError: state=> state.error
  }
})