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
        class="w-5/6 my-2 ml-2 mr-2 bg-grey-dark">
        <p :class="tailwind.odd">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
        accusantium ad consectetur, deserunt dignissimos, dolorum eligendi eum
        illum laudantium nesciunt possimus quisquam repudiandae? Adipisci amet
        architecto dolorem in nesciunt odit!</p>
        <p :class="tailwind.even">Accusamus, atque, blanditiis consequatur corporis deleniti deserunt
        est harum incidunt, ipsum nulla perspiciatis qui rem sunt unde
        voluptatibus. A assumenda at deserunt distinctio dolore eaque modi
        officiis qui suscipit temporibus.</p>
        <p :class="tailwind.odd">Accusantium aliquid, at consequuntur, culpa cum delectus deserunt
        distinctio dolor dolorem doloribus est fugiat incidunt magni maiores
        nisi non nostrum obcaecati quo repudiandae sequi soluta suscipit ullam
        velit voluptate voluptatibus?</p>
        <p :class="tailwind.even">Blanditiis culpa dolores error facilis id iure minus pariatur
        perspiciatis quisquam vitae? A, ad consequuntur dignissimos, dolore
        dolores ea illo iure magni omnis quaerat quas quasi reiciendis sit
        tenetur, vel!</p>
        <p :class="tailwind.odd">Ab assumenda dicta dignissimos ducimus eligendi eum facere nisi
        quaerat! Amet beatae cumque dolorem, facere hic ipsam natus nemo
        nesciunt, nihil nisi possimus qui unde veritatis. Asperiores eaque
        eligendi nostrum.</p>
        <p :class="tailwind.even">Amet assumenda consequatur, cum, eos error facere ipsum magni minima
        modi non odio totam ullam voluptatum! Alias dignissimos ea enim fuga
        labore. Ad esse excepturi incidunt laudantium neque non quidem.</p>
        <p :class="tailwind.odd">Accusantium ad commodi deserunt dicta doloribus ea eum facere harum
        incidunt itaque iure molestias mollitia nam nulla numquam optio
        perspiciatis provident qui repellat reprehenderit similique sit
        tenetur, ut velit voluptatum.</p>
        <p :class="tailwind.even">Aliquid animi consequuntur corporis cum cupiditate eos ex expedita
        facere fuga iusto maxime minima, molestias nemo neque numquam odio
        odit quis sint sit tempora ut vel vero vitae voluptates
        voluptatum.</p>
        <p :class="tailwind.odd">Ad cupiditate dolore ipsam magni minima molestiae natus, neque
        nostrum odio quisquam ratione sint ullam, voluptatem? Commodi
        consectetur cum dolores eaque ex in nam numquam omnis quia sed, vel
        voluptatem.</p>
        <p :class="tailwind.even">A, blanditiis delectus ducimus illo in iusto laudantium libero minus,
        necessitatibus nulla optio quasi voluptate. Atque dolorum ea eligendi
        enim, exercitationem fuga fugiat, incidunt molestias odio rem
        reprehenderit repudiandae velit?</p>
        <p :class="tailwind.odd">A ab accusamus accusantium consectetur delectus distinctio dolore
        ducimus eaque oddiet expedita ipsa labore, maxime nesciunt nobis quae
        quibusdam recusandae repellat repellendus tempora tempore temporibus,
        unde veritatis vero vitae voluptates!</p>
        <p :class="tailwind.even">Asperiores blanditiis culpa doloribus ipsa iste nisi reiciendis
        reprehenderit tempore. A alias amet animi aspernatur atque aut dolorem
        dolorum eius explicabo, hic impedit natus nulla optio quo suscipit,
        ullam vero?</p>
        <p :class="tailwind.odd">Eaque iusto magni nihil porro sit. Animi aperiam aspernatur cum
        cupiditate dignissimos dolor dolores, ea ex fuga labore modi, nemo
        nobis nulla odit porro quam tempora tempore temporibus veniam
        voluptatibus.</p>
      </div>
    </div>
    <footer class="w-full pin-b text-center border-t border-grey p-4">
      <p>DockerDash &copy; 2018</p>
    </footer>
  </div>
</template>

<script>
import SystemInfo from "./SystemInfo";

export default {
  name: "Dashboard",
  components: { SystemInfo },
  computed: {
    tailwind() {
      return {
        odd: "bg-grey-darkest text-grey-lighter my-2",
        even: "bg-grey-lighter text-grey-darkest my-2"
      };
    }
  }
};
</script>
