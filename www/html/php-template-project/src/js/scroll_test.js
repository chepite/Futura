import {gsap} from "gsap"
import {ScrollToPlugin} from "gsap/ScrollToPlugin";
import {ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

export const snap = () => {

};

export const init = () => {
  console.log('scroll test work');
  snap();

};
