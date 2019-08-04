function fullSize() {
  const height = $(window).height() - 50;
  $(".jumbotron").height(Math.max(height, 600));
  $(".carousel").height(Math.max(height, 600));
  $(".slide").height(Math.max(height, 600));
}

$(window).resize(function() {
  fullSize();
});
fullSize();
