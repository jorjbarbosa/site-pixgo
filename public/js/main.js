const scroll = new SmoothScroll('a[href*="#"]', {
  ignore: '[data-scroll-ignore]',
  speed: 500,
  header: '[data-scroll-header]'
});
