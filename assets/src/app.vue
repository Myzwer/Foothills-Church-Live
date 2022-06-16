<template>
  <img
      :class="gender"
      v-bind:src="picture"
      :alt="`${firstName} ${lastName}`"
  />
  <h1>{{firstName}} {{lastName}}</h1>
  <h3>Email: {{email}}</h3>
  <button class = "bg-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" v-on:click="getUser()">Get Random User</button>
</template>

<script>
export default {
  name: "app"
}

const app = Vue.createApp({
  data() {
    return {
      firstName: "John",
      lastName: "Doe",
      email: "jonathandoe@gmail.com",
      gender: "male",
      picture: "https://randomuser.me/api/portraits/men/10.jpg",
    };
  },
  methods: {
    async getUser() {
      const res = await fetch("https://randomuser.me/api");
      const { results } = await res.json();

      this.firstName = results[0].name.first;
      this.lastName = results[0].name.last;
      this.email = results[0].email;
      this.gender = results[0].gender;
      this.picture = results[0].picture.large;
    },
  },
});
app.mount("#stickybutton");
</script>

<style scoped>

</style>