const accordionEl = document.querySelectorAll(".price__headline");
const burgerBtnEl = document.querySelector(".header__burger");
const mobileMenuEl = document.querySelector(".mobile__menu");
const closeMenuBtnEl = document.querySelector(".mobile__cross");
const menuListEl = mobileMenuEl.querySelectorAll(".mobile__list li");

const openAccordionText = (e) => {
  const targetEl = e.currentTarget;
  targetEl.nextElementSibling.classList.toggle("price__hidden");
  if (targetEl.nextElementSibling.classList.contains("price__hidden")) {
    targetEl.lastElementChild.style.transform = "rotateX(0)";
  } else {
    targetEl.lastElementChild.style.transform = "rotateX(180deg)";
  }
};

const openCloseMenu = () => {
  mobileMenuEl.classList.toggle("hide__menu");
};
const closeMenu = () => {
  mobileMenuEl.classList.add("hide__menu");
};
accordionEl.forEach((item) => {
  item.addEventListener("click", openAccordionText);
});
menuListEl.forEach((menuItem) => {
  menuItem.addEventListener("click", closeMenu);
});

burgerBtnEl.addEventListener("click", openCloseMenu);
closeMenuBtnEl.addEventListener("click", closeMenu);
