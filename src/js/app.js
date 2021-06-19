document.addEventListener("DOMContentLoaded", function () {
  eventListeners();
});

function eventListeners() {
  const mobileMenu = document.querySelector(".mobile-menu");
  mobileMenu.addEventListener("click", navegationResponsive);
}

function navegationResponsive() {
  const nav = document.querySelector(".nav-content");
  nav.classList.toggle("show");
}
