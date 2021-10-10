import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const timeline = gsap.timeline({ defaults: { duration: .8 }})
const about = document.querySelector('.about__content');
const contact = document.querySelector('.contact');
const whatwedo = document.querySelector('.about__content__whatwedo');
const crew = document.querySelector('.about__content__crew');

timeline
  .from('.header-info__logo', { y: '-=100', duration: .2, opacity: 0 })
  .from('.header-info__title', { delay: 0, y: '-=200', duration: .4, })
  .from('.menu-item', { opacity: 0, x: '-=20', duration: .5, opacity: 0 })
  .from('.posts__title', { delay: 0, ease: 'power1.inOut' , opacity: 0, duration: .4 })
  .from('.player', { opacity: 0 })
  
  gsap.fromTo(about.children, {y: '+=100', opacity: 0}, {y: 0, opacity: 1, stagger: .2, duration: .6, ease: 'easeInOut', scrollTrigger: {
    trigger: '.about',
    start: '0% 60%',
    // markers: true
  }})
  
  gsap.fromTo(whatwedo.children, {y: '+=100', opacity: 0}, {y: 0, opacity: 1, stagger: .6, duration: 1, ease: 'easeInOut', scrollTrigger: {
    trigger: '.about__content__whatwedo',
    start: '-10% 60%',
    // markers: true,
  }})
  
  gsap.fromTo(crew.children, {y: '+=100', opacity: 0}, {y: 0, opacity: 1, stagger: .4, duration: 1, ease: 'easeInOut', scrollTrigger: {
    trigger: '.about__content__crew',
    start: '-4% 60%',
    // markers: true,
  }})
  gsap.fromTo(contact.children, {y: '+=100', opacity: 0}, {y: 0, opacity: 1, stagger: 0.2, duration: .9, ease: 'easeInOut', scrollTrigger: {
    trigger: '.contact',
    start: '-20% 90%',
  }})






