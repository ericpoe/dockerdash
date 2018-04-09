<template>
  <table
    id="ContainersInfoGrid"
    class="table"
  >
    <thead>
      <tr id="ContainersInfoGridHeader">
        <th id="headerContainerId">ID</th>
        <th id="headerContainerNames">Names</th>
        <th id="headerContainerImage">Image</th>
        <th id="headerContainerState">State</th>
        <th id="headerContainerStatus">Status</th>
        <th id="headerContainerCreated">Date Created</th>
        <th id="headerContainerCommand">Command</th>
      </tr>
    </thead>
    <tbody>
      <tr
        id="rowContainerInfoGridRows"
        class=""
        v-for="item in containersInfo"
      >
        <td class="">{{ item.id }}</td>
        <td class="">
          <ul class="list-reset">
            <li v-for="element in item.names">{{ element }}</li>
          </ul>
        </td>
        <td class="">{{ item.image }}</td>
        <td class="">{{ item.state }}</td>
        <td class="">{{ item.status }}</td>
        <td class="">{{ new Date(item.created * 1000).toISOString() }}</td>
        <td class="">{{ item.command }}</td>
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

  computed: {
    tailwind() {
      return {
        odd: "bg-grey-darkest text-grey-lighter my-2",
        even: "bg-grey-darker text-grey-lighter my-2"
      };
    }
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
