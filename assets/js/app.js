import Vue from "vue";
import axios from "axios";
import VueAxios from "vue-axios";
import Dashboard from "./components/Dashboard";

Vue.use(VueAxios, axios);

/**
 * A filter to truncate long text
 * @param text
 * @param length
 * @param clamp
 * @returns {string}
 */
Vue.filter("truncate", function(text, stop, clamp) {
  return text.slice(0, stop) + (stop < text.length ? clamp || "…" : "");
});

new Vue({
  el: "#app",
  components: { Dashboard }
});
