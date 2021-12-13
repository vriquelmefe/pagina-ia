<template>
  <div class="locale-switcher">
      <div class="pa-5">

    <select id="locale" v-model="$i18n.locale" >
      <option v-for="locale in locales" :key="locale.key" :value="locale.key">{{ locale.label}} 
      </option>
    </select>
    <label for="locale" aria-label="Locale"></label>
      </div>
  </div>
</template>

<script>
export default {
  name: "LocalSwitcher",
  data: () => ({
    locales: [
      { key: "es", label: " 🇪🇸 Esp ", src: "https://img.freeflagicons.com/thumb/rectangular_icon/spain/spain_640.png" },
      { key: "en", label: " 🇺🇸 Eng " , src: "https://img.freeflagicons.com/thumb/rectangular_icon/united_states_of_america/united_states_of_america_640.png"},
    ],
  }),
  created() {
    console.log(this.$i18n.locale);
  },
  watch: {
    "$i18n.locale": {
      handler(locale) {
        localStorage.setItem("locale", locale);
        window.location.reload()
      },
    },
  },
};
</script>

<style scoped>
.locale-switcher:focus{
    border: none;
    
}
select{
    color: #DBDBDB;
    font-weight: 400;
    font: inherit;
    cursor: pointer;
}
</style>
