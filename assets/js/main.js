"use strict";
$(document).ready(function () {
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
});
