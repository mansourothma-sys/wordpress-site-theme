(function () {
  "use strict";

  var targets = document.querySelectorAll(
    ".section, .stats-grid, .vision-grid, .faculty-grid, .document-grid, .event-card, .support-grid"
  );

  if (!("IntersectionObserver" in window) || !targets.length) {
    targets.forEach(function (el) {
      el.classList.add("is-visible");
    });
    return;
  }

  targets.forEach(function (el) {
    el.classList.add(
      el.matches(".stats-grid, .vision-grid, .faculty-grid, .document-grid, .support-grid")
        ? "reveal-stagger"
        : "reveal"
    );
  });

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15, rootMargin: "0px 0px -60px 0px" }
  );

  targets.forEach(function (el) {
    observer.observe(el);
  });
})();
