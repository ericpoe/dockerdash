<template>
  <div
    id="outerContainer"
    class="container mx-auto p-4 bg-grey-light">
    <header class="w-full border-b border-grey-darker text-grey-lightest">
      <div class="flex items-baseline">
        <div
          id="title"
          class="w-1/3 text-left"><h1>DockerDash</h1></div>
        <div
          id="userInfo"
          class="w-2/3 text-right"><p>Login</p></div>
      </div>
      <SystemInfo/>
    </header>
    <div
      id="content"
      class="flex w-full p-2 bg-grey-lighter">
      <div
        id="menuBar"
        class="w-1/6 m-2 bg-grey-darkest text-grey-lighter">Side Menu</div>
      <div
        id="mainBody"
        class="w-5/6 my-2 ml-2 mr-2 bg-purple-darker">
        <ContainersInfoGrid />
      </div>
    </div>
    <footer class="w-full pin-b text-center border-t border-grey p-4">
      <p>DockerDash &copy; 2018</p>
    </footer>
  </div>
</template>

<script>
import SystemInfo from "./SystemInfo";
import ContainersInfoGrid from "./container/ContainersInfoGrid";

export default {
  name: "Dashboard",
  components: { ContainersInfoGrid, SystemInfo }
};
</script>
