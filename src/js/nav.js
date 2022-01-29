import {gsap} from "gsap";
let navAnim;
const navTrigger = () => {
  console.log('WORKING');
  const list = document.querySelector('.nav__list--div');
  list.classList.toggle('hidden');
};

export const Navinit = () => {
  const list = document.querySelector(".nav__list--div");

  const nav = document.querySelector('.nav__list--logo a');
  navAnim = gsap.from(list, {
    duration: 1,
  });
  nav.addEventListener('click', navTrigger);
};

