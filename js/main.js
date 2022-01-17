jQuery(document).ready(function($) {
    "use strict"; 
      // Mobile menu
      var link = $('.mobile-menu-btn');
      var link_active = $('.mobile-menu-active');
      var menu = $('.mobile-menu');
      var nav_link = $('.mobile-menu a')
      link.click(function() {
        link.toggleClass('mobile-menu-active');
        menu.toggleClass('mobile-menu-active');
      });
      nav_link.click(function() {
        link.toggleClass('mobile-menu-active');
        menu.toggleClass('mobile-menu-active');
      });
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("accordion-active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}