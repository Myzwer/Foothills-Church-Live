import "../sass/frontend.scss"
import * as Vue from 'vue'
import "regenerator-runtime/runtime"

import { createApp } from 'vue'
import App from '../App.vue'

createApp(App).mount('#app')

(function ($) {
  // Begin jQuery
  $(function () {
    // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".nav-dropdown").toggle();
      // Close one dropdown when selecting another
      $(".nav-dropdown").not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $("html").click(function () {
      $(".nav-dropdown").hide();
    });
    // Toggle open and close nav styles on click
    $("#nav-toggle").click(function () {
      $("nav ul").slideToggle();
    });
    // Hamburger to X toggle
    $("#nav-toggle").on("click", function () {
      this.classList.toggle("active");
    });
  }); // end DOM ready
})(jQuery); // end jQuery


// I wrapped up Thursday with Vue working, but still can't get the component to import.