import LocomotiveScroll from '../node_modules/locomotive-scroll';

/* Create canvas and add to page. */
const scroll = new LocomotiveScroll({
	    el: document.querySelector('[data-scroll-container]'),
	    smooth: true
});