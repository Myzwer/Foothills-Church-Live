<template>
  <div class="w-4/12">
    <div class="bg-blue-light">
      <div class="bg-blue">
        <h1 class="uppercase">Take your next step</h1>
      </div>
      <div class="bg-blue">
        <h3 class="uppercase">First time?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cupiditate doloremque fugiat harum hic
          inventore iste, laboriosam minima modi odio quidem rem rerum sit ut veniam, vitae voluptatem voluptatibus
          voluptatum!</p>
      </div>
    </div>
  </div>

  <a href="#" class="float">
    <i class="fa fa-plus floating-button"></i>
  </a>

</template>

<script>
// Make SURE you import vue into the project
import * as Vue from 'vue'

// Export the name of the file. This is what gets mounted.
export default {
  name: "stickyButton",

  data() {
    return {
      fname: "John",
    };
  },
}

</script>

<style scoped>

</style>