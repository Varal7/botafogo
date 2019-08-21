const menu = $('#menu');
const nav = $('#nav');
menu.click(function(e) {
  e.stopPropagation(); // This is the preferred method.
  if (nav.hasClass("responsive")) {
    nav.removeClass("responsive");
  } else {
    nav.addClass("responsive");
  }
});

$(document).click(function() {
    nav.removeClass("responsive");
});
