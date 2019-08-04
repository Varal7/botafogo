const menu = $('#menu');
const nav = $('#nav');
menu.click(function() {
  console.log("hello");
  if (nav.hasClass("responsive")) {
    nav.removeClass("responsive");
  } else {
    nav.addClass("responsive");
  }
  console.log(nav);
});
