<template>
    <div class="px-6">
        <v-card class="mx-auto card-chica mb-5 ">
            <v-img src="@/assets/DataExtaction.jpeg"  data-aos="zoom-in" data-aos-duration="2000"></v-img>

            <div class="px-3 py-4">
              <v-card-title
                class="titulo-card pt-7 pb-5"
                v-t="'soluciones.card.titulo_card_1'"
              ></v-card-title>

              <v-card-subtitle
                class="texto-card pb-3"
                v-t="'soluciones.card.texto_card_1'"
              ></v-card-subtitle>
               
            </div>
          </v-card>
          <v-card class="mx-auto card-chica mb-5">
            <v-img src="@/assets/DemandForecasting.jpeg"  data-aos="zoom-in" data-aos-duration="2000"></v-img>

            <div class="px-3 py-4">
              <v-card-title
                class="titulo-card pt-7 pb-5"
                v-t="'soluciones.card.titulo_card_2'"
              ></v-card-title>

              <v-card-subtitle
                class="texto-card pb-3"
                v-t="'soluciones.card.texto_card_2'"
              ></v-card-subtitle>
                
            </div>
          </v-card>
          <v-card class="mx-auto card-chica mb-5">
            <v-img src="@/assets/Cluster2.jpeg"  data-aos="zoom-in" data-aos-duration="2000"></v-img>

            <div class="px-3 py-4">
              <v-card-title
                class="titulo-card pt-7 pb-5"
                v-t="'soluciones.card.titulo_card_3'"
              ></v-card-title>

              <v-card-subtitle
                class="texto-card pb-3"
                v-t="'soluciones.card.texto_card_3'"
              ></v-card-subtitle>
               
            </div>
          </v-card>
           <v-card class="mx-auto card-chica mb-5">
            <v-img src="@/assets/Optimizacion.jpeg"  data-aos="zoom-in" data-aos-duration="2000"></v-img>

            <div class="px-3 py-4">
              <v-card-title
                class="titulo-card pt-7 pb-5"
                v-t="'soluciones.card.titulo_card_4'"
              ></v-card-title>

              <v-card-subtitle
                class="texto-card pb-3"
                v-t="'soluciones.card.texto_card_4'"
              ></v-card-subtitle> 
            </div>
          </v-card>
           <v-card class="mx-auto card-chica ">
            <v-img src="@/assets/CustomModels.jpeg"  data-aos="zoom-in" data-aos-duration="3000"></v-img>

            <div class="px-3 py-4">
              <v-card-title
                class="titulo-card pt-7 pb-5"
                v-t="'soluciones.card.titulo_card_5'"
              >Optimización de procesos</v-card-title>

              <v-card-subtitle
                class="texto-card pb-3"
                v-t="'soluciones.card.texto_card_5'"
              ></v-card-subtitle>
               
            </div>
          </v-card>
    </div>
</template>
<script>
export default {
    name: 'CardServiciosChica',
}
</script>
<style scoped>
h2 {
  font-size: 2.1em;
}
.titulo-card{
  font-size: 1.1 em;
  font-weight: 600;
  color: #212121;
  margin-bottom: 0.8rem;
  text-align: center;
}
.texto-card {
  color: #212121;
  font-size: .7 em;
}
p {
  color: #212121;
  font-size: .95rem;
}
span {
  color: #212121;
  font-weight: 600;
}
h2 {
  font-size: 2rem;
  font-weight: bold;
  color: #212121;
}
.v-btn {
  font-weight: 600;

}
.card-grande {
  display: none;
}
</style>