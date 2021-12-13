<template>
  <v-container class="mt-15" cols="12" id="soluciones">
    <h2 class="text-center" v-t="'soluciones.titulo'">
      <hr color="#66ff00" class="divisorServicios"/>
    </h2>
    <br>
    <br>
    <div class="mx-4">

    <h5 class="text-center" v-t="'soluciones.subtitulo'">
      <hr color="#66ff00" class="divisorServicios"/>
    </h5>
    <h5 class="text-center" v-t="'soluciones.subtitulo2'">
      <hr color="#66ff00" class="divisorServicios"/>
    </h5>
    </div>
    <!-- <transition name="transitionServicios" mode="in-out">  -->

    <v-container class="pt-16 px-4  justify-xl-space-between">
      <div>
        <!--Card pantalla grande-->
        <CardServiciosGrande class=" card-grande " />

        <!--Card pantalla chica-->
        <CardServiciosChica class="card-chica" />
      </div>
    </v-container>
  </v-container>
</template>
<script>
import { mapState } from "vuex";
import CardServiciosGrande from "@/components/CardServiciosGrande.vue";
import CardServiciosChica from "@/components/CardServiciosChica.vue";
export default {
  name: 'Soluciones',
  components: {
    CardServiciosGrande,
    CardServiciosChica,
  },
  data: () => ({}),
  computed: {
    ...mapState(["items"]),
  },
};
</script>
<style scoped>
.divisorServicios{
  height: 8px;
}
@media (max-width: 599px) {
  .card-grande {
    display: none;
  }
  .card-chica {
    display: block;
  }
  h2 {
    font-size: 1.8em;
  }
}
@media (min-width: 600px) {
  .card-grande {
    display: block;
  }
  .card-chica {
    display: none;
  }
  h2 {
    font-size: 2em;
  }
}
@media (min-width: 710px) {
  .card-grande {
    width: 100%;
    display: flex;
    flex-direction: column;
  }
}
@media (min-width: 1024px) {
  .card-grande {
    width: 100%;
    display: flex;
    flex-direction: column;
  }
}
.transitionServicios-enter-active,
.transitionServicios-leave-active {
  transition: opacity 0.7s;
}
.transitionServicios-enter,
.transitionServicios-leave-to {
  opacity: 0;
}
</style>
