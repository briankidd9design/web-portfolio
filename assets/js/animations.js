const cube = document.querySelector(".cube");

cube.addEventListener("mouseenter", () => {
  cube.classList.add("animate-cube-hover");
});
cube.addEventListener("animationend", () => {
  cube.classList.remove("animate-cube-hover");
  cube.classList.remove("animate-cube-page-load");
});
window.addEventListener("load", () => {
  cube.classList.add("animate-cube-page-load");
});
