<template>
  <v-footer dark>
    <v-container class="d-flex mx-auto">
      <v-col class=" mr-auto" cols="12" sm="6">
        <v-container>
          <div class="d-wrap">
            <v-img
              src="@/assets/logo-neuraldata-cyan.svg"
              height="168px"
              width="180px"
              class="mx-auto"
            ></v-img>
            <v-card-text class="text-center">
              <v-card-subtitle class=" text-center d-sm-block">
                {{ $t('footer.texto-footer')}}
              </v-card-subtitle>
              <v-btn
                class="mx-4 white--text"
                icon
                href="https://twitter.com/neural_dataCL"
              >
                <v-icon size="24px" color="#5293ce">
                  mdi-twitter
                </v-icon>
              </v-btn>
              <v-btn
                class="mx-4 white--text"
                icon
                href="https://www.linkedin.com/in/neural-data-720234229/"
              >
                <v-icon size="24px" color="#5293ce">
                  mdi-linkedin
                </v-icon>
              </v-btn>
              <v-btn
                class="mx-4 white--text"
                icon
                href="https://www.instagram.com/neural_data/"
              >
                <v-icon size="24px" color="#5293ce">
                  mdi-instagram
                </v-icon>
              </v-btn>
            </v-card-text>
          </div>
        </v-container>
      </v-col>
      <div class="mx-auto enlaces mt-5" cols="12" md="6">
        <v-col >
          <v-list sm="2" md="2"
            >
            <h4 v-t="'links.enlaces'" color="#5293ce"></h4>
            <v-list-item>
              <v-btn exact class="pl-0 text-capitalize" color="#f4f4f4" plain href="#nosotros" v-t="'nosotros.titulo'">
              
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn
                exact
                class="pl-0 text-capitalize"
                color="#f4f4f4"
                plain
                href="#soluciones"
                v-t="'soluciones.titulo'"
              >
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn exact class="pl-0 text-capitalize" color="#f4f4f4" plain href="#contacto" v-t="'contacto.titulo'">
              </v-btn>
            </v-list-item>
          </v-list>
        </v-col>
        <v-divider></v-divider>

        <v-col class="d-flex enlacesServicios" cols="12" sm="4">
          <v-list>

          <h4 v-t="'soluciones.titulo'" color="#5293ce"></h4>
          <v-list-item>
      <v-list-item-content>
        <v-list-item-title>{{ $t('soluciones.card.titulo_card_1') }}</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title>{{ $t('soluciones.card.titulo_card_2') }}</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title>{{ $t('soluciones.card.titulo_card_3') }}</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title>{{ $t('soluciones.card.titulo_card_4') }}</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title>{{ $t('soluciones.card.titulo_card_5') }}</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
          </v-list>
        </v-col>
      </div>
    </v-container>
    <v-card-text class="white--text text-center">
      {{ new Date().getFullYear() }} — <strong>by Vanessa Riquelme</strong>
    </v-card-text>
  </v-footer>
</template>

<script scoped>
export default {
  data: () => ({
    icons: ["mdi-twitter", "mdi-linkedin", "mdi-instagram"],
    model: 1,
  }),
};
</script>

<style scoped>
.enlaces {
  display: none;
}
h4{
  color: #5293ce;
}
.v-list-item__title{
  font-size: .9rem;
}

@media (min-width: 600px) {
  .enlaces {
    display: block;
    justify-content: space-around;
    align-items: center;
  }
}
@media (min-width: 1024px) {
  .enlaces {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
  }
  .v-divider {
    display: none;
  }
  .col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 20%;
}
}
.theme--dark {
  background: none;
}
.v-list {
  font-size: 1.2em;
}
.v-list-item {
  padding: 0;
  font-size: 0.5em;
}
.enlacesServicios {
  font-size-adjust: inherit;
}
.theme--dark.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled) {
  color: #dbdbdb !important;
}
</style>
