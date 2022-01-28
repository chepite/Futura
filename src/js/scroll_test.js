import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

export const snap = () => {
  gsap.registerPlugin(ScrollTrigger);

  const sections = gsap.utils.toArray('.NaziGermany__horizontal--div');
  console.log(sections);

  gsap.to(sections, {
    xPercent: - 100 * (sections.length - 1),
    ease: 'none',
    scrollTrigger: {
      trigger: '.NaziGermany__horizontal',
      pin: '.NaziGermany__horizontal',
      //pin: true,
      start: 'center center',
      //toggleActions: "play complete restart reverse",
      markers: true,
      scrub: true,
      //snap: 1 / (sections.length - 1),
      // base vertical scrolling on how wide the container is so it feels more natural.
      //end: "+=1560 bottom",
      end: 'bottom center',
    },
  });
};

export const bgSwitch = () => {
  const container = document.querySelector('.bgContainer');
  const sections = gsap.utils.toArray('.bgContainer__div');
  const beige = document.querySelector('.NaziGermany__text--beige');
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: '.bgContainer',
      pin: true,
      scrub: true,
      markers: true,
      end: () => `+=${container.offsetHeight}`,
    },
  });

  tl.to(sections, {
    duration: 4,
    ease: 'none',
  })
    .to(container, {duration: 1, backgroundColor: '#fdf7ea', ease: 'none'}, 2)
    .from(beige, {duration: 2, xPercent: 100}, 1)
    .to(sections[0], {duration: 1, color: '#000', ease: 'none'}, 1);

};

export const init = () => {
  console.log('scroll test work');
  //test to fix scrolltrigger issue on mobile dev tools
  window.addEventListener('resize', ScrollTrigger.refresh());
  //end test fix
  snap();
  bgSwitch();
};
