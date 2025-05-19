"use strict";
$(document).ready(function () {
  // Transition Animations
  document.querySelectorAll(".tdc--transition__link").forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const href = this.href;

      document.body.classList.add("fade--out");
      setTimeout(() => {
        window.location.href = href;
      }, 500);
    });
  });

  // Accordion
  const accordionTitle = document.querySelectorAll(".accordion--holder__title");

  accordionTitle.forEach((title) => {
    title.addEventListener("click", () => {
      if (title.classList.contains("active")) {
        title.classList.remove("active");
      } else {
        const accordionTitleWithOpen = document.querySelectorAll(".active");
        accordionTitleWithOpen.forEach((accordionTitlesWithOpen) => {
          accordionTitlesWithOpen.classList.remove("active");
        });
        title.classList.add("active");
      }
    });
  });
});
