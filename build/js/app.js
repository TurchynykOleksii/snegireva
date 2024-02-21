const accordionEl = document.querySelectorAll(".price__headline");

const openAccordionText = (e) => {
  const targetEl = e.currentTarget;
  targetEl.nextElementSibling.classList.toggle("price__hidden");
  if (targetEl.nextElementSibling.classList.contains("price__hidden")) {
    targetEl.lastElementChild.style.transform = "rotateX(0)";
  } else {
    targetEl.lastElementChild.style.transform = "rotateX(180deg)";
  }
};

accordionEl.forEach((item) => {
  item.addEventListener("click", openAccordionText);
});
