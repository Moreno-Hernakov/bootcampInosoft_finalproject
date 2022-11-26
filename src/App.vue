<template>
  <div id="app" v-if="this.$route.meta.type != 'auth'">
    
    <Sidebar />

    <section class="home">
      <Navbar/>

      <router-view class="mt-20"/>
    </section>
      
  
  </div>
  <div v-else>
    <router-view/>
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import Sidebar from './components/Sidebar.vue';

export default {
  name: 'App',
  components: {
    Sidebar,
    Navbar
  },
  computed: {
    isLoggedIn: function () {
      return this.$store.getters.isLoggedIn
    }
  },
  created() {
    if (this.isLoggedIn) {
      this.$store.dispatch('getUser');
    }
  }
}
</script>