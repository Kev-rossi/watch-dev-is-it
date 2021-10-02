const header = document.querySelector("header");
header.classList.add("header");
const hamurger = document.querySelector(".hamburger");
const nav = document.querySelector("nav");

hamurger.addEventListener("click", function (event) {
    header.classList.toggle("hamburger-opened");
  });