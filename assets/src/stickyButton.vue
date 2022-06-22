<template>
  <div class="md:w-3/12 m-5 shadow-2xl rounded-3xl float-box">
    <div class="bg-blue rounded-t-3xl">
      <h1 class="uppercase text-white text-xl md:text-2xl text-center p-5">Take your next step</h1>
    </div>
    <div class="bg-blue-xlight">
      <div class="grid grid-cols-12">
        <div class="col-span-9 p-5">
          <h3 class="uppercase font-bold text-xl">First time?</h3>
          <p>If it’s your first time, we’d love to connect with you! You can fill out our first-time guest form, see our
            events, and so much more by clicking the arrow.</p>
        </div>

        <div class="col-span-3 p-5 relative">
          <div class="content-middle">
            <a href="#">
              <div class="inline-block bg-blue px-5 py-4 rounded-full">
                <i class="text-white text-4xl fa-solid fa-arrow-right"></i>
              </div>
            </a>
          </div>
        </div>
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
.float {
  background-color: #7498be;
  border-radius: 50px;
  bottom: 20px;
  box-shadow: 2px 2px 3px #999999;
  color: #FFFFFF;
  height: 60px;
  position: fixed;
  right: 20px;
  text-align: center;
  width: 60px;
  z-index: 2;
}

.float-box {
  position: fixed;
  right: 10px;
  bottom: 80px;
  z-index: 2;
}

@media screen and (min-width: 40em) {
  .float-box {
    right: 60px;
    bottom: 100px;
  }
}

@media screen and (min-width: 40em) {
  .float {
    bottom: 40px;
    right: 40px;
  }
}

.floating-button {
  margin-top: 22px;
}
</style>