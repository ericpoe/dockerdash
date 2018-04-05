import Vue from "vue";
import axios from "axios";
import VueAxios from "vue-axios";
import Dashboard from "./components/Dashboard";

Vue.use(VueAxios, axios);

new Vue({
  el: "#app",
  components: { Dashboard }
});
