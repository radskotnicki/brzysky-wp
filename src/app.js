import tippy, {animateFill, roundArrow} from 'tippy.js';
import Plyr from 'plyr';

const player = new Plyr('#player');
var clipboard = new ClipboardJS('.mail--tippy');
let mail = document.querySelector('.contact__mail--tippy');

tippy('.contact__mail', {
  animation: 'shift-toward',
  content: "kliknij, żeby skopiować mail...",
  trigger: 'mouseenter',
  offset: [0, 10],
  delay: [0, 100],
  theme: 'custom',
});
tippy('.contact__mail', {
  content: "adres maila skopiowany!",
  trigger: 'click',
  hideOnClick: false,
  onShow(instance) {
    setTimeout(() => {
      instance.hide();
    }, 1600);
  },
  animation: 'scale-extreme',
  offset: [0, 10],
  theme: 'custom-success',
});

tippy('.about__content__crew__card__email', {
  animation: 'shift-toward',
  content: "kliknij, żeby skopiować mail...",
  trigger: 'mouseenter',
  offset: [0, -65],
  delay: [0, 100],
  theme: 'crew',
});
tippy('.about__content__crew__card__email', {
  content: "adres maila skopiowany!",
  trigger: 'click',
  hideOnClick: false,
  onShow(instance) {
    setTimeout(() => {
      instance.hide();
    }, 1600);
  },
  animation: 'scale-extreme',
  offset: [0, -65],
  theme: 'crew-success',
});

