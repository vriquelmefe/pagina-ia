<template>
  <v-navigation-drawer v-model="drawer" right fixed temporary class="background">
    <v-list class="mt-3">
      <v-list-item>
              <v-btn exact class="pl-0" color="#5200d7" plain href="#nosotros" v-t="'nosotros.titulo'">
              
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn
                exact
                class="pl-0"
                color="#5200d7"
                plain
                href="#soluciones"
                v-t="'soluciones.titulo'"
              >
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn exact class="pl-0" color="#5200d7" plain href="#contacto" v-t="'contacto.titulo'">
              </v-btn>
            </v-list-item>
      <LocalSwitcher />
    </v-list>
  </v-navigation-drawer>
</template>

<script>
// Utilities
import LocalSwitcher from './LocaleSwitcher.vue'


export default {
  name: "Drawer",
  components : {
    LocalSwitcher
  },
  data: () => ({
    links: [
      'Home',
      'Nosotros',
      'Soluciones',
      'Contacto'
    ],
  }),
  computed: {
    drawer: {
      get() {
        return this.$store.state.drawer;
      },
      set(val) {
        this.$store.commit("SET_DRAWER", val);
      },
    },
    linkDrawer(){
      const links = [
      'Home',
      this.$t('links.nosotros'),
      this.$t('links.soluciones'),
      this.$t('links.contacto')
    ]
    return links
    }
  },
};
</script>

<style scoped>
.v-list-item a:hover{
  text-decoration: none;
  color: #7e12c6;
  opacity: 0.7;
  font-weight: bold;
}
.v-list-item {
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 500;
  
}
</style>
<style>
.background{
  background-color: #212121;
}
</style>