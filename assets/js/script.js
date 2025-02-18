document.addEventListener("DOMContentLoaded", () => {
  const tdcHamMenu = document.querySelector(".ham--menu-mobile");
  const tdcOffScreenMenu = document.querySelector(".off--screen-menu");
  const menuLinks = document.querySelectorAll(".off--screen-menu a");

  if (tdcHamMenu && tdcOffScreenMenu) {
    tdcHamMenu.addEventListener("click", () => {
      tdcHamMenu.classList.toggle("active");
      tdcOffScreenMenu.classList.toggle("active");
    });

    // Close menu when clicking a link
    menuLinks.forEach((link) => {
      link.addEventListener("click", () => {
        tdcHamMenu.classList.remove("active");
        tdcOffScreenMenu.classList.remove("active");
      });
    });
  }
});
