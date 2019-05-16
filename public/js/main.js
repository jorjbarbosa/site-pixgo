const scroll = new SmoothScroll('a[href*="#"]', {
  ignore: "[data-scroll-ignore]",
  speed: 500,
  header: "[data-scroll-header]"
});
var owl = $(".owl-carousel");
owl.owlCarousel({
  items: 4,
  loop: true,
  margin: 0,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true
});
