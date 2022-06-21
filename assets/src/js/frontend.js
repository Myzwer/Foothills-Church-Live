import "../sass/frontend.scss"
import "../js/header.js"

// Import Vue
import * as Vue from 'vue'

// Import the component
import App from '../app.vue'

// This is only needed for the random user generator
import "regenerator-runtime/runtime"

// This imports the createapp needed to make the component work
import { createApp } from 'vue'

// Define the app
const app = createApp(App)

// Mount the App
app.mount('#app')
