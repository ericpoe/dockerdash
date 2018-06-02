<template>
  <table
    id="ContainersInfoGrid"
    class="table"
  >
    <thead>
      <tr
        id="ContainersInfoGridHeader"
        class="align-bottom bg-grey-darkest text-grey-lighter"
      >
        <th id="headerContainerNames">Name(s)</th>
        <th id="headerContainerImage">Image</th>
        <th id="headerContainerState">State</th>
        <th id="headerContainerStatus">Status</th>
        <th id="headerContainerCreated">Date Created</th>
        <th id="headerContainerCommand">Command</th>
      </tr>
    </thead>
    <tbody>
      <tr
        v-for="item in containersInfo"
        id="rowContainerInfoGridRows"
        class="align-text-top"
      >
        <td class="px-2">
          <ul class="list-reset">
            <li v-for="element in item.names">{{ element.replace("/", "") | truncate(12) }}</li>
          </ul>
        </td>
        <td class="px-2">{{ item.image | truncate(20) }}</td>
        <td class="px-2">{{ item.state }}</td>
        <td class="px-2">{{ item.status }}</td>
        <td class="px-2 whitespace-pre">{{ new Date(item.created * 1000).toISOString().replace(".000Z", "Z").replace("T", "\n") }}</td>
        <td class="px-2">{{ item.command | truncate(30) }}</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
import axios from "axios";

export default {
  name: "ContainersInfoGrid",
  data: function() {
    return {
      containersInfo: {}
    };
  },

  mounted: function() {
    // initial load
    this.loadData();

    // run every 30 seconds
    setInterval(
      function() {
        this.loadData();
      }.bind(this),
      30000
    );
  },

  methods: {
    loadData: function() {
      let self = this;

      axios
        .get("/containers/")
        .then(response => {
          self.containersInfo = response.data;
        })
        .catch(error => {
          console.log("Error getting docker containers: %o", error);
        });
    }
  }
};

</script>
