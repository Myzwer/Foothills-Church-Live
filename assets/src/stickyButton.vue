<template>
  <div class="md:w-96 m-5 shadow-2xl rounded-3xl float-box">
    <div class="bg-blue-light rounded-3xl">
      <h1 class="uppercase text-white text-xl md:text-2xl text-center p-5">Take your next step</h1>
      <Flicking :plugins="plugins" :options="{ circular: true }">

        <div style="width: 90%; height: 400px;">
          <div class="container-1">
            <div class="grid grid-cols-12">
              <div class="col-span-12 p-5">
                <h3 class="uppercase text-white font-bold text-xl">First time?</h3>
                <p class = "text-white pb-3">If it’s your first time, we’d love to connect with you! You can fill out our first-time guest form, see our
                  events, and so much more by clicking the arrow.</p>
                <button class="bg-white text-blue font-bold py-2 px-4 rounded-full">
                  CTA Button
                </button>
              </div>
            </div>
          </div>
        </div>

        <div style="width: 90%;">
          <div class="container-2">
            <div class="grid grid-cols-12">
              <div class="col-span-12 p-5">
                <h3 class="uppercase text-white font-bold text-xl">First time?</h3>
                <p class = "text-white pb-3">If it’s your first time, we’d love to connect with you! You can fill out our first-time guest form, see our
                  events, and so much more by clicking the arrow.</p>
                <button class="bg-white text-blue font-bold py-2 px-4 rounded-full">
                  CTA Button
                </button>
              </div>
            </div>
          </div>
        </div>

        <div style="width: 90%;">
          <div class="container-3">
            <div class="grid grid-cols-12">
              <div class="col-span-12 p-5">
                <h3 class="uppercase text-white font-bold text-xl">First time?</h3>
                <p class = "text-white pb-3">If it’s your first time, we’d love to connect with you! You can fill out our first-time guest form, see our
                  events, and so much more by clicking the arrow.</p>
                <button class="bg-white text-blue font-bold py-2 px-4 rounded-full">
                  CTA Button
                </button>
              </div>
            </div>
          </div>
        </div>

      </Flicking>

      <div class="bg-blue-light rounded-b-3xl">
        <h3 class="uppercase text-white text-xl md:text-lg text-center p-2">New Copy here!</h3>
      </div>
    </div>
  </div>

  <a href="#" class="float">
    <i class="fa fa-plus floating-button"></i>
  </a>

</template>

<script>
// Make SURE you import vue into the project
import * as Vue from 'vue';
import Flicking from "@egjs/vue3-flicking";
import {AutoPlay, Parallax} from "@egjs/flicking-plugins";
const plugins = [
    new AutoPlay({ duration: 4000, direction: "NEXT", stopOnHover: true }),
    // new Parallax(),
];

export default {
  name: "stickyButton",
  components: {
    Flicking: Flicking,
  },

  data() {
    return {
      plugins
    }
  }
}

</script>

<style scoped>
@import url("../../node_modules/@egjs/vue3-flicking/dist/flicking.css");
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

.container-1 {
  background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
  ),url(https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1748&q=80) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}

.container-2 {
  background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
  ),url(https://images.unsplash.com/photo-1655983214560-2e2b8803ca53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2064&q=80) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}

.container-3 {
  background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
  ),url(https://images.unsplash.com/photo-1438232992991-995b7058bbb3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1746&q=80) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}
</style>