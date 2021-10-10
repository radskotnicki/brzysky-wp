import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const timeline = gsap.timeline({ defaults: { duration: .5 }})

timeline
  .from('.player', { delay: .5, opacity: 0 })
  .from('.single-post__menu', { delay: 1, duration: .8, opacity: 0 })

const contact = document.querySelector('.contact');

gsap.fromTo(contact.children, {y: '+=100', opacity: 0}, {y: 0, opacity: 1, stagger: 0.2, duration: .9, ease: 'easeInOut', scrollTrigger: {
  trigger: '.contact',
  start: '-50% 70%',
}})