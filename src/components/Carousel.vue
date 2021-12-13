<template>
<div>
  <div class="mt-15 banner">
    <v-img src="@/assets/PagPrincipal.jpeg" alt="" class="img-fluid banner-img">
     <v-row
        align="end"
        class="fill-height"
      >
       <v-col class="py-0 elevacion">
          <v-list-item
            color="rgba(0, 0, 0, .4)"
            dark
          >
            <v-list-item-content>
              <v-list-item-title class="text-h4 font-weight-bold">
                {{ $t('carusel.titulo')}}
              </v-list-item-title>
              <v-list-item-title class="font-weight-bold" elevation="20">{{ $t('carusel.subtitulo')}}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-col>
      </v-row>
    </v-img>
  </div>
  <v-carousel hide-delimiters cycle class="mt-4 carrusel">
    <v-carousel-item
      src="@/assets/portada2.jpeg"
      class="img-fluid"
    >
      <v-row
       class="fill-height ml-14"
          align="center"
          justify="start"
      >
      <div class="texto-carusel" >
            <h1 color="#f4f4f4" class="tituloCarusel"> {{ $t('carusel.titulo')}}</h1>
            <h3  class="mt-3" color="#f4f4f4">{{ $t('carusel.subtitulo')}}</h3>
            <v-card-actions>
      <v-btn
        color="#5200d7"
        dark
        tile
        class="pa-4 font-weight-bold"
        href="#contacto"
        v-t="'links.contacto'"
      >
      </v-btn>
    </v-card-actions>
          </div>
      </v-row>
      
    </v-carousel-item>

    <v-carousel-item
      src="@/assets/PagPrincipal.jpeg"
      class="img-fluid"
    >
      <v-row
        class="fill-height ml-14"
          align="center"
          justify="start"
      >
      <div class="texto-carusel">
            <h1 color="#f4f4f4" class="tituloCarusel" > {{ $t('carusel.titulo')}}</h1>
            <h3 class="mt-3" color="#f4f4f4">{{ $t('carusel.subtitulo')}}</h3>
            <v-card-actions>
      <v-btn
        color="#5200d7"
        dark
        tile
        class="pa-5 font-weight-bold"
        href="#contacto"
        v-t="'links.contacto'"
      >
      </v-btn>
    </v-card-actions>
          </div>
      </v-row>
    </v-carousel-item>
  </v-carousel>
  </div>
</template>

<script>
  //font-family: 'Yesteryear', cursive;
  export default {
    
  }
</script>

<style scoped>
.texto-carusel{
  max-width: 80%;
  color: #f4f4f4;
  margin-left: 5%;
  padding: 15px;
}
.tituloCarusel{
  font-size: 50px;
}
.elevacion{
  box-shadow: 4px 4px 10px #5293ce;
}

h2{
  font-size: 2.3em;
  text-shadow: 2px 2px 3px #5293ce;
}
.banner-img {
  width: 100%;
}
.carrusel {
  display: none;
}
@media (min-width: 768px) {
  .banner {
    display: none;
  }
  .carrusel {
    display: block;
  }
}
.carrusel {
  transition: all 1s ease;
}

</style>