VanillaTilt.init(document.querySelectorAll(".card-about"), {
  max: 25,
  speed: 400,
  easing: "cubic-bezier(.05,.80,.60,.99)",
  perspective: 500,
  transition: true,
});

const header = document.querySelector(".header");

window.addEventListener("scroll", () => {
  if (window.scrollY >= 450) {
    header.classList.add("scrolled");
  } else if (window.scrollY <= 400) {
    header.classList.remove("scrolled");
  }
});
