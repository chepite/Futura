import {gsap} from 'gsap';
let navAnim;
const navTrigger = () => {
  console.log('WORKING');
  const list = document.querySelector('.nav__list--div');
  list.classList.toggle('hidden');
};

export const Navinit = () => {
  const list = document.querySelector('.nav__list--div');
  window.addEventListener('resize', function () {
    if (window.innerWidth > 1024) {
      list.classList.remove('hidden');
    }
    else {
      list.classList.add('hidden');
    }
  });
  if (window.innerWidth > 1024) {
    console.log('fix');
    list.classList.toggle('hidden');
  }
  navAnim = gsap.from(list, {
    yPercent: 200,
    duration: 1,
  });

  const nav = document.querySelector('.nav__list--logo a');
  nav.addEventListener('click', navTrigger);
  nav.addEventListener('click', navAnim.play(2));
};

