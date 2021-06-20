document.addEventListener("DOMContentLoaded", function () {
  eventListeners();
  darkMode();
});

function darkMode() {
  const btnDarkMode = document.querySelector(".dark-mode-btn");

  btnDarkMode.addEventListener("click", () => {
    const button = document.getElementsByClassName("button");
    document.body.classList.toggle("dark-mode");
    for (let i = 0; i < button.length; i++) {
      button[i].classList.toggle("dark-button");
    }
  });
}

function eventListeners() {
  const mobileMenu = document.querySelector(".mobile-menu");
  mobileMenu.addEventListener("click", navegationResponsive);
}

function navegationResponsive() {
  const nav = document.querySelector(".nav-content");
  nav.classList.toggle("show");
}
