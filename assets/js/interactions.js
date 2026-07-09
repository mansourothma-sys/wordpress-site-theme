(function () {
  "use strict";

  // FAQ accordion
  var faqItems = document.querySelectorAll(".faq-item");
  faqItems.forEach(function (item) {
    var button = item.querySelector(".faq-question");
    if (!button) {
      return;
    }
    button.addEventListener("click", function () {
      var isOpen = item.classList.contains("is-open");
      faqItems.forEach(function (other) {
        other.classList.remove("is-open");
        var otherButton = other.querySelector(".faq-question");
        if (otherButton) {
          otherButton.setAttribute("aria-expanded", "false");
        }
      });
      if (!isOpen) {
        item.classList.add("is-open");
        button.setAttribute("aria-expanded", "true");
      }
    });
  });

  // Faculty search empty-state (works alongside the filter in main.js)
  var search = document.getElementById("faculty-search");
  var grid = document.getElementById("faculty-grid");
  var emptyState = document.getElementById("faculty-empty-state");

  if (search && grid && emptyState) {
    var updateEmptyState = function () {
      var cards = Array.from(grid.querySelectorAll(".faculty-card"));
      var visible = cards.some(function (card) {
        return !card.hidden;
      });
      emptyState.hidden = visible;
    };
    search.addEventListener("input", updateEmptyState);
  }

  // Count-up animation for stat numbers
  var counters = document.querySelectorAll("[data-count-to]");
  if (counters.length) {
    var animateCounter = function (el) {
      var target = parseInt(el.getAttribute("data-count-to"), 10) || 0;
      var suffix = el.textContent.replace(/[0-9]/g, "");
      var start = 0;
      var duration = 900;
      var startTime = null;

      var step = function (timestamp) {
        if (!startTime) {
          startTime = timestamp;
        }
        var progress = Math.min((timestamp - startTime) / duration, 1);
        var value = Math.floor(progress * (target - start) + start);
        el.textContent = value + suffix;
        if (progress < 1) {
          window.requestAnimationFrame(step);
        } else {
          el.textContent = target + suffix;
        }
      };

      window.requestAnimationFrame(step);
    };

    if ("IntersectionObserver" in window) {
      var counterObserver = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              animateCounter(entry.target);
              counterObserver.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.4 }
      );
      counters.forEach(function (el) {
        counterObserver.observe(el);
      });
    } else {
      counters.forEach(animateCounter);
    }
  }
})();
