<template>
  <v-app class="fondo">
    <AppBar />
    <Drawer />

    <transition name="vista" mode="out-in">
      <router-view></router-view>
    </transition>
  </v-app>
</template>

<script>
import AppBar from './components/AppBar'
import Drawer from './components/Drawer'


import { mapMutations, mapState } from "vuex";

export default {
  name: 'App',
  components: {
    AppBar,
    Drawer
  },

  data: () => ({
      items: [
        { title: 'Soluciones' },
        { title: 'Nosotros' },
        { title: 'Contacto' },
      ],
    }),
  computed: {
    ...mapState(["links"]),
  },
  methods: {
    ...mapMutations({
      setDrawer: "SET_DRAWER",
    }),
    
  }
}
</script>

<style>
html {
  scroll-behavior: smooth;
  font-family: 'Source Sans Pro', sans-serif;
  color: #212121;
}
</style>
<style scoped>
.vista-enter-active,
.vista-leave-active {
  transition: opacity 0.7s;
}
.vista-enter,
.vista-leave-to {
  opacity: 0;
}
</style>
