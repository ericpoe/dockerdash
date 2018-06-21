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
        <th id="headerContainerNames" @click="sort('names')">Name(s)</th>
        <th id="headerContainerImage" @click="sort('image')">Image</th>
        <th id="headerContainerState" @click="sort('state')">State</th>
        <th id="headerContainerStatus" @click="sort('status')">Status</th>
        <th id="headerContainerCreated" @click="sort('created')">Date Created</th>
        <th id="headerContainerCommand" @click="sort('command')">Command</th>
      </tr>
    </thead>
    <tbody>
      <tr
        v-for="item in sortedContainers"
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
        <td class="px-2 whitespace-pre">{{ formatDate(item.created) }}</td>
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
      containersInfo: [],
      currentSort: "created",
      currentSortDir: "desc"
    };
  },

  computed: {
    sortedContainers: function() {
      let item = this.currentSort;

      let me = this;

      return me.containersInfo.sort((a, b) => {
        let modifier = me.currentSortDir === "asc" ? 1 : -1;
        let sortPlacement = a[item] < b[item] ? -1
                          : a[item] > b[item] ? 1
                          : 0;

        return sortPlacement * modifier;
      });
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
    },

    formatDate: function(timeStamp) {
      return new Date(timeStamp * 1000)
        .toISOString()
        .replace(".000Z", "Z")
        .replace("T", "\n");
    },

    /**
     * Sort function
     *
     * Liberally borrowed from https://www.raymondcamden.com/2018/02/08/building-table-sorting-and-pagination-in-vuejs
     */
    sort: function(s) {
      //if s == current sort, reverse
      if (s === this.currentSort) {
        this.currentSortDir = this.currentSortDir === "asc" ? "desc" : "asc";
      }
      this.currentSort = s;
    }
  }
};
</script>
