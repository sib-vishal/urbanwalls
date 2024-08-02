gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

const smoother = ScrollSmoother.create({
  wrapper: "#smooth-wrapper",
  content: "#smooth-content",
  smooth: 2,
  normalizeScroll: true,
  ignoreMobileResize: true,
  effects: true,
  preventDefault: true,
});
