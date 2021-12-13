<template>
  <v-app-bar app fixed color="#212121" height="100px">
    <router-link :to="{ name: 'Home' }">
      <img src="@/assets/logo-neuraldata-cyan.svg" alt="" class="pa-3 mt-3"/>
    </router-link>

    <v-spacer></v-spacer>
    <v-toolbar-items v-if="$vuetify.breakpoint.mdAndUp" class="shrink">
      <v-btn exact color="#f4f4f4" plain :to="{ name: 'Home' }" v-t="'links.inicio'"></v-btn>

      <v-btn exact color="#f4f4f4" plain href="#nosotros" v-t="'links.nosotros'"></v-btn>
      <v-btn exact color="#f4f4f4" plain href="#soluciones" v-t="'links.soluciones'"></v-btn>
      <v-btn exact color="#f4f4f4" plain href="#contacto" v-t="'links.contacto'"></v-btn>
     

    <LocalSwitcher  class="mt-5"/>
    </v-toolbar-items>
    

    <v-app-bar-nav-icon v-else @click="setDrawer(true)" />
    
     
  </v-app-bar>
</template>

<script>
import { mapMutations, mapState } from "vuex";
import LocalSwitcher from '../components/LocaleSwitcher.vue'

export default {
  name: "App",
  components: {
    LocalSwitcher
  },
  computed: {
    ...mapState(["links"]),
  },
  methods: {
    ...mapMutations({
      setDrawer: "SET_DRAWER",
    }),
  },
};
</script>

<style scoped>
.imagenBandera {
  width: 50%;
}
img {
  width: 5rem;
  margin-left: 15%;
}
.v-btn {
  text-transform: capitalize;
  font-family: "Source Sans Pro", sans-serif;
  font-weight: 400;
  font-size: 1em;
}
.lenguaje {
  color: #dbdbdb;
}
.v-btn:hover {
  text-decoration: none;
}
.mdi-menu::before {
  color: #5200d7;
  font-weight: 700;
  font-size: 1.2em;
}
.v-list-item:hover {
  text-decoration: none;
  color: #990099;
  opacity: 0.7;
}
</style>
