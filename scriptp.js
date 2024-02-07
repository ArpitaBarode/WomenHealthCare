
// script.js
const mobile_nav = document.querySelector(".mobile-navbar-btn");
const nav_header = document.querySelector(".header");

const nav = document.querySelector(".navbar-list");
const toggleNavbar = () => {
  // alert("Plz Subscribe ");
  nav_header.classList.toggle("active");
 
};

mobile_nav.addEventListener("click", () => toggleNavbar());


