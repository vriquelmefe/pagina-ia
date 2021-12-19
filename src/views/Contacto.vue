<template>
  <div class="background-color mt-10" id="contacto">
    <v-container
      class="px-10"
    >
      <v-row class="mt-3 mb-5 px-2">
        <v-col cols="12" sm="6" class="pl-3 px-md-0">
          <div class="styleInfo pt-6">
            <h2
              class="
                mb-12
                font-weight-bold
                animate__animated animate__fadeInLeft
              "
              v-t="'contacto.titulo'"
            >
              <hr
                color="#66ff00"
                width="25%"
                class="
                  justify-center
                  d-sm-none
                  animate__animated animate__fadeInLeft
                "
              />
            </h2>
            <v-card-subtitle v-t="'contacto.info'"> </v-card-subtitle>

            <div class="mb-4">
              <v-icon large color="#5293ce">mdi-whatsapp</v-icon>
              <span>+56 9 12345678</span> <br />
            </div>

            <div class="mb-2">
              <v-icon large color="#5293ce">mdi-email-outline</v-icon>
              <span>info@neuraldata.cl</span>
            </div>
          </div>
        </v-col>
        <v-col cols="12" sm="6" class="pt-10">
          <v-form lazy-validation 
          v-model="valid"
          ref="form"
          contains>
            <v-text-field
              outlined
              v-model="name"
              :rules="nombreRequired"
              :label="$t('contacto.label.nombre')"
              :placeholder="$t('contacto.label.nombre')"
              required
            ></v-text-field>

            <v-text-field
              outlined
              v-model="emailForm"
              :rules="emailRequired"
              label="E-mail"
              placeholder="e-mail"
              required
            ></v-text-field>
            <v-text-field
              outlined
              v-model="phoneNumber"
              :rules="numeroRequired"
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
              v-model="mensaje"
              name="input-7-4"
              placeholder="Mensaje"
              :label="$t('contacto.label.mensaje')"
              required
            ></v-textarea>

            <vue-recaptcha :sitekey="sitekey"></vue-recaptcha>

            <v-btn
              class="mr-4 mt-3"
              block
              elevation="8"
              :disabled="!valid"
              @click="procesarFormulario"
              v-t="'contacto.boton'"
            >
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
    valid: false,
    name: "",
    emailForm: "",
    phoneNumber: "",
    empresa: "",
    mensaje: "",
    formulario:{}
  }),
  methods: {
    procesarFormulario() {
      console.log(this.name)
      console.log(this.emailForm)
      console.log(this.phoneNumber)
      console.log(this.empresa)
      console.log(this.mensaje)
      if (
        this.$refs.form) {
        this.formulario = {
          name: this.name,
          emailForm: this.emailForm,
          phoneNumber: this.phoneNumber,
          empresa: this.empresa,
          mensaje: this.mensaje
        }
        alert(this.$t("contacto.alertas.envio_correcto"));
        console.log(this.formulario);
        this.$refs.form.reset()
        return this.formulario
      
      } else {
        alert(this.$t("contacto.alertas.datos_incompletos"));
      }
    },
    clear(){
      return (
          name= '',
          emailForm= '',
          phoneNumber= '',
          empresa= '',
          mensaje= ''
      )
        
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
    nombreRequired() {
      const nameRules = [
        (v) => !!v || this.$t("contacto.reglas.nombre_requerido")
      ];
      return nameRules;
    },
    emailRequired() {
      const emailRules = [
        (v) => !!v || this.$t("contacto.reglas.email_requerido"),
        v => /.+@.+/.test(v) || this.$t("contacto.reglas.email_invalido"),
      ];
      return emailRules;
    },
    numeroRequired() {
      const numeroEmpresa = [
        (v) =>
          /^(\+?56)?(\s?)(0?9)(\s?)[9876543]\d{7}$/.test(v) ||
          this.$t("contacto.reglas.numero_requerido"),
      ];
      return numeroEmpresa;
    },
    nombreEmpresaRequired() {
      const empresaRules = [
        (v) => !!v || this.$t("contacto.reglas.nombre-emp_requerido"),
      ];
      return empresaRules;
    },
  },
};
</script>

<style scoped>
.captchaTamano {
  width: 75% !important;
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
