document.addEventListener('DOMContentLoaded', () => {
  let height = window.innerHeight;
  let min = (height*29)/100;
  let currentH = height - min;

  let container = document.querySelector(".container-clients");
  container.style.height = `${currentH}px`;
});

