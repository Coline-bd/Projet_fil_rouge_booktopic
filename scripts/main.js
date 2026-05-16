const burgerBtn =
  document.getElementById("menu");

const footer =
  document.querySelector("footer");

const navBarre =
  document.getElementById("navBarre");

burgerBtn.addEventListener("click", () => {

  navBarre.classList.toggle("open");
  footer.classList.toggle("open");

});

