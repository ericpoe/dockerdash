<template>
  <div class="flex w-full justify-center overflow-hidden text-grey-darker">
    <span
      id="ServerVersion"
      class="px-2">
      <strong class="font-bold">Server Version: </strong> {{ sysInfo.serverVersion || "Unknown" }}
    </span>
    <span
      id="Containers"
      class="px-2">
      <strong class="font-bold">Containers: </strong> {{ sysInfo.containers || 0 }}
      <strong class="font-bold">Containers Running: </strong> {{ sysInfo.containersrunning || 0 }}
    </span>
    <span
      id="Images"
      class="px-2">
      <strong class="font-bold">Images: </strong> {{ sysInfo.images || 0 }}
    </span>
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
