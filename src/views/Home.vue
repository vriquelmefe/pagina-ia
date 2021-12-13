<template>
  <v-container  fluid>
    <Carousel />
    <Soluciones  />
    <Nosotros class="mt-10 fondoNosotros" />
    <Tecnologias />
    <Contacto  class="fondo-contacto "/>
    <Footer class="fondoNosotros"/>
  </v-container>
</template>

<script>
import Carousel from '@/components/Carousel.vue'
import Nosotros from '@/views/Nosotros.vue'
import Tecnologias from '@/components/Tecnologias.vue'
import Soluciones from '@/views/Soluciones.vue'
import Contacto from '@/views/Contacto.vue'
import Footer from '@/components/Footer.vue'

  export default {
    name: 'Home',

    components: {
      Carousel,
      Nosotros,
      Tecnologias,
      Soluciones,
      Contacto,
      Footer
    },
    data: () => ({
      isActive: false,
    }),
  }
</script>
<style scoped>
.fondoNosotros{
  background-color: #212121;
}
.fondo-contacto{
  background-color: #dbdbdb50;
}
.container{
  padding: 0;
}
</style>
