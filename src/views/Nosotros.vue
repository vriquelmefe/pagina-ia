<template>
  <v-container class="mt-15 mb-5 nosotrosScroll" fluid id="nosotros">
    <v-container class="px-10 pt-8 pb-14 ">
      <h2 class="text-center pb-6 " v-t="'nosotros.titulo'"></h2>
  <v-row>

        <v-col
        cols="12"
        md="6"
        sm="12"
        >
          <v-card
            class="mx-auto mb-md-5 mb-sm-5 my-5 mb-14 "
            max-width="344"
            data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="3000"
          >
            <div class="d-flex justify-center mt-5 avatar">
                <v-img src="@/assets/Jesus.jpeg"></v-img>
            
            </div>
            <div class="d-flex justify-center">
              <v-card-title>
                {{ $t('nosotros.masinfo.titulo_mas_1')}}
              </v-card-title>
            </div>

            <v-divider></v-divider>
            <v-card-text>{{ $t('nosotros.masinfo.mas_1') }} </v-card-text>
          </v-card>
        </v-col>
        <v-col
        cols="12"
        md="6"
        sm="12">
          <v-card
            class="mx-auto mb-md-5 mb-sm-5 my-5 mb-14 "
            max-width="344"
            data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="3000"
          >
            <div class="d-flex justify-centers avatar">
                <v-img src="@/assets/Ankush_Pandey.jpeg"></v-img>
            
            </div>
            <div class="d-flex justify-center">
              <v-card-title>
                {{ $t('nosotros.masinfo.titulo_mas_2')}}
              </v-card-title>
            </div>

            <v-divider></v-divider>
            <v-card-text>{{ $t('nosotros.masinfo.mas_2') }} </v-card-text>
          </v-card>
        </v-col>
  </v-row>
    </v-container>
  </v-container>
</template>
<script>
export default {
  data: () => ({
    show: false,
    // items: [
    //   {
    //     imagen: "https://cdn-icons-png.flaticon.com/512/1998/1998524.png",
    //     titulo: "asdasdasdasd",
    //     descripcion: "asdasdasdasd",
    //     masInfo: "{{ $t('nosotros.masinfo.titulo_mas_1') }}",
    //   },
    //   {
    //     imagen: "https://cdn-icons-png.flaticon.com/512/3588/3588062.png",
    //     titulo: "asdasdasdasd",
    //     descripcion: "asdasdasdasd",
    //     masInfo:
    //       "I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! you're going to do his laundry? I've got to find a way to escape.",
    //   },
    //   {
    //     imagen: "https://cdn-icons-png.flaticon.com/512/3163/3163998.png",
    //     titulo: "asdasdasdasd",
    //     descripcion: "asdasdasdasd",
    //     masInfo:
    //       "I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! you're going to do his laundry? I've got to find a way to escape.",
    //   },
    // ],
  }),
  methods: {},
};
</script>
<style scoped>
h2 {
  font-size: 2.2em;
  color: #dbdbdb;
}
.avatar {
  height: 50vh;
}
.nosotrosScroll {
  transition: 1.5s all cubic-bezier(0.39, 0.575, 0.565, 1);
}
.v-sheet.v-card:not(.v-sheet--outlined) {
  box-shadow: 6px 6px 10px rgba(234, 234, 234, 0.772);
}
</style>
