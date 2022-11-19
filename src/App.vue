<template>
  <div id="app">
    <Sidebar />

    <section class="home">
      <Navbar/>

      <router-view class="mt-20"/>
    </section>
      
  
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
  }
}
</script>