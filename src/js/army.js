import {gsap} from 'gsap';

const textDivider = texts => {
  const even = [];
  const uneven = [];
  for (let i = 0;i < texts.length;i ++) {
    if (i % 2 === 0) {
      even.push(texts[i]);
    }
    else {
      uneven.push(texts[i]);
    }
  }
  return {evenArray: even, unevenArray: uneven};
};

const ArmyInfinite = () => {
  //const texts = document.querySelectorAll(".ArmySection p");
  //const result = textDivider(texts);
  // let uneven = result.unevenArray;
  // let even = result.evenArray;
  // gsap.to(even, {
  //   duration: 5,
  //   ease: "none",
  //   xPercent: 50, //move each box 500px to right
  //   modifiers: {
  //     x: gsap.utils.unitize((x) => parseFloat(x) % 500), //force x value to be between 0 and 500 using modulus
  //   },
  //   repeat: -1,
  // });

  // gsap.to(uneven, {
  //   duration: 5,
  //   ease: "none",
  //   xPercent: -50, //move each box 500px to right
  //   modifiers: {
  //     x: gsap.utils.unitize((x) => parseFloat(x) % 500), //force x value to be between 0 and 500 using modulus
  //   },
  //   repeat: -1,
  // });
  const even = document.querySelector('.ArmySection__div--anim');
  const evenClone = even.cloneNode(true);
  gsap
    .timeline({repeat: - 1, defaults: {ease: 'none'}})
    .to(even.querySelector('p'), {xPercent: - 50, duration: 0})
    .to(evenClone, {xPercent: 50, duration: 0})
    .to(even.querySelector('p'), {xPercent: - 150, duration: 5})
    .to(evenClone, {xPercent: 150, duration: 5}, '<');

  const uneven = document.querySelector('.ArmySection__div--anim2');
  const unevenClone = uneven.cloneNode(true);
  gsap
    .timeline({repeat: - 1, defaults: {ease: 'none'}})
    .to(uneven, {xPercent: - 50, duration: 0})
    .to(unevenClone, {xPercent: 50, duration: 0})
    .to(uneven, {xPercent: - 150, duration: 5})
    .to(evenClone, {xPercent: 150, duration: 5}, '<');

};

export const Armyinit = () => {
  ArmyInfinite();
};
