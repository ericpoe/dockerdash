<template>
  <div class="max-w-full overflow-hidden bg-grey-lightest shadow-lg">
    <div class="px-4 py-2">
      <p class="text-grey-darker text-base">
        <span id="ServerVersion">
          <strong class="font-bold">Server Version: </strong> {{ sysInfo.serverVersion || "Unknown" }}
        </span>
        <span id="Containers">
          <strong class="font-bold">Containers: </strong> {{ sysInfo.containers || 0 }}
          <strong class="font-bold">Containers Running: </strong> {{ sysInfo.containersrunning || 0 }}
        </span>
        <span id="Images">
          <strong class="font-bold">Images: </strong> {{ sysInfo.images || 0 }}
        </span>
      </p>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "SystemInfo",
  data() {
    return {
      sysInfo: {}
    };
  },

  created() {
    let self = this;

    axios
      .get("/docker")
      .then(response => {
        self.sysInfo = response.data;
      })
      .catch(error => console.log("Error getting docker's sysinfo: %o", error));
  }
};
</script>
