<template>
<div class="">
    <h2 class="text-center">Plataformas</h2>

  <v-container   class="card-tecnologias" sm="12" md="6" data-aos="flip-left"
          data-aos-easing="ease-out-cubic" data-aos-duration="3000">
    <v-col>

  <v-card
    class="mx-auto"
    max-width="344"
    outlined
    sm="12"
   md="6"
  >
    <v-list-item three-line>
      <v-list-item-content>
        <v-list-item-title class="text-h6 mb-1">
          Google Cloud Platform
        </v-list-item-title>
        <v-list-item-subtitle>Google Cloud es una plataforma que ha reunido todas las aplicaciones de desarrollo web que Google estaba ofreciendo por separado.</v-list-item-subtitle>
      </v-list-item-content>

      <v-list-item-avatar
        size="80"
      > <v-img src="@/assets/logo-gcp.jpeg"></v-img></v-list-item-avatar>
    </v-list-item>

    <v-card-actions>
      <v-btn
        outlined
        tile
        color="#5200d7"
        href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwiYoaqindnzAhWRDJEKHcIeB84YABAAGgJjZQ&ohost=www.google.com&cid=CAESQeD2-C5SMHopr55sFWB0FE49wTJAOgtKMDlgrZoFldqtG6J8CbuwEs5FOkSGXzDt61vqmzUFDCIw7LHCaEVZ_vBO&sig=AOD64_3ZGnNSIqJqxsL_0oAv5UYHQTw2kA&q&adurl&ved=2ahUKEwinx6CindnzAhWrKLkGHbZPD5UQ0Qx6BAgCEAE"
        v-t="'tecnologias.btn-mas'"
      >
      </v-btn>
    </v-card-actions>
  </v-card>
  </v-col>
  <v-col>
  
   <v-card
    class="mx-auto"
    max-width="344"
    outlined
    sm="12"
    md="6"
  >
    <v-list-item three-line>
      <v-list-item-content>
        <v-list-item-title class="text-h6 mb-1">
          AWS
        </v-list-item-title>
        <v-list-item-subtitle>Amazon Web Services es una colección de servicios de computación en la nube pública que en conjunto forman una plataforma de computación en la nube, ofrecidas a través de Internet por Amazon.com. </v-list-item-subtitle>
      </v-list-item-content>

      <v-list-item-avatar
        size="80"
      > <v-img src="@/assets/logo-aws-yellow.png"></v-img></v-list-item-avatar>
    </v-list-item>

    <v-card-actions>
      <v-btn
        outlined
        tile
        color="#5200d7"
        href="https://aws.amazon.com/es/"
        v-t="'tecnologias.btn-mas'"
      >
      </v-btn>
    </v-card-actions>
  </v-card>
    </v-col>
  </v-container>
</div>
</template>
<script>
export default {
}
</script>
<style scoped>
h2{
  font-size: 2.2em;
}
.theme--light.v-sheet--outlined {
  border: none;
}
.card-tecnologias{
  display: flex;
  flex-direction: column;
}
@media (min-width: 768px) {
  .card-tecnologias {
    display: flex;
    flex-direction: row;
  }
}
</style>