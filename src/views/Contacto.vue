<template>
  <div class="background-color mt-10 " id="contacto">
    <v-container class="px-10" data-aos="flip-right"
          data-aos-easing="ease-out-cubic" data-aos-duration="3000">
      <v-row class="mt-3 mb-5 px-2">
        <v-col cols="12" sm="6" class="pl-3 px-md-0">
          <div class="styleInfo pt-6">
            <h2
              class="mb-12 animate__animated animate__fadeInLeft"
              v-t="'contacto.titulo'"
            >
              <hr
                color="#66ff00"
                width="25%"
                class="justify-center d-sm-none animate__animated animate__fadeInLeft"
              />
            </h2>
            <v-card-subtitle v-t="'contacto.info'"> </v-card-subtitle>

            <div class="mb-4">
              <v-icon large color="#5100d7">mdi-whatsapp</v-icon>
              <span>+56 9 12345678</span> <br />
            </div>

            <div class="mb-2">
              <v-icon large color="#5100d7">mdi-email-outline</v-icon>
              <span>IA@gmail.com</span>
            </div>
          </div>
        </v-col>
        <v-col cols="12" sm="6" class="pt-10">
          <v-form
            ref="form"
            v-model="valid"
            lazy-validation
            @submit.prevent="validate"
            contains
          >
            <v-text-field
              outlined
              v-model="name"
              :counter="10"
              :rules="nombreRequired"
              :label="$t('contacto.label.nombre')"
              :placeholder="$t('contacto.label.nombre')"
              required
            ></v-text-field>

            <v-text-field
              outlined
              v-model="email"
              :rules="emailRequired"
              label="E-mail"
              placeholder="e-mail"
              required
            ></v-text-field>
            <v-text-field
              outlined
              v-model="phoneNumber"
              :rules="numeroRequired"
              :counter="9"
              :label="$t('contacto.label.numero_empresa')"
              :placeholder="$t('contacto.label.numero_empresa')"
              required
            ></v-text-field>
            <v-text-field
              outlined
              v-model="empresa"
              :rules="nombreEmpresaRequired"
              :label="$t('contacto.label.nombre_empresa')"
              :placeholder="$t('contacto.label.nombre_empresa')"
              required
            ></v-text-field>
            <v-textarea
              outlined
              name="input-7-4"
              placeholder="Mensaje"
              :label="$t('contacto.label.mensaje')"
              required
            ></v-textarea>

            <vue-recaptcha :sitekey="sitekey"></vue-recaptcha>
            <v-btn class="mr-4 mt-3" block rounded elevation="8" @click="enviar()" v-t="'contacto.boton'">
            </v-btn>
          </v-form>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
import VueRecaptcha from "vue-recaptcha";
export default {
  name: "Contacto",
  components: {
    VueRecaptcha,
  },
  data: () => ({
    sitekey: process.env.VUE_APP_RECAPTCHA_TOKEN,
    valid: true,
    name: "",
    email: "",
    phoneNumber: "",
    empresa: "",
    
  }),
  methods: {
    enviar() {
      if (this.name != "" && this.email != "" && this.phoneNumber != "" && this.empresa != ""){

        alert(this.$t('contacto.alertas.envio_correcto'));
        this.$refs.reset(form)
      }else{
        alert(this.$t('contacto.alertas.datos_incompletos'))
      }
    },
    validate() {
      this.$refs.recaptcha.execute();
    },
  },
  register(recaptchaToken) {
    axios.post("https://yourserverurl.com/register", {
      email: this.email,
      password: this.password,
      recaptchaToken: recaptchaToken,
    });
  },
  computed: {
    nombreRequired(){
      console.log('nameRules',nameRules)
      const nameRules= [
      (v) => !!v || this.$t('contacto.reglas.nombre_requerido'),
      (v) => (v && v.length <= 10) || this.$t('contacto.reglas.nombre_maximo'),
      ]
      return nameRules
    },
    emailRequired(){
      const emailRules = [
      (v) => !!v || this.$t('contacto.reglas.email_requerido'),
      (v) => /.+@.+\..+/.test(v) || this.$t('contacto.reglas.email_invalido'),
      ]
      return emailRules
    },
    numeroRequired(){
      const numeroEmpresa= [
      (v) => /^(9|8|7)\\d{8}$/.test(v) || this.$t('contacto.reglas.numero_requerido'),
    ]
    return numeroEmpresa
    },
    nombreEmpresaRequired(){
      const empresaRules= [(v) => !!v || this.$t('contacto.reglas.nombre-emp_requerido')]
      return empresaRules
    }
  }
};
</script>

<style scoped>
.captchaTamano{
  width: 75%!important;
}
h2 {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 2rem;
  font-weight: 500;
  color: #212121;
  text-align: center;
}
.v-btn:not(.v-btn--round).v-size--default {
  background-color: #5100d7;
  color: #dbdbdb;
  font-weight: 700;
}
hr {
  height: 5px;
  margin: 0 auto;
}
@media (min-width: 768px) {
  h2 {
    text-align: left;
  }
}
span {
  color: #212121;
  font-size: 1em;
  margin-left: 0.7em;
  font-family: "Source Sans Pro", sans-serif;
  font-weight: 500;
}
</style>
