function carousel() {
  $(".jumbotron").show();
  $(".carousel").slick({
    autoplay: false,
    autoplaySpeed: 6000,
    infinite: true,
    speed: 100,
    cssEase: "ease-in-out",
    pauseOnHover: false
  });

  // let wheelOn = true;
  // $(".carousel").on("wheel", function(e) {
  //   if (!wheelOn) {
  //     return;
  //   }
  //   if (e.originalEvent.deltaX < -0) {
  //     e.preventDefault();
  //     $(this).slick("slickNext");
  //   } else if (e.originalEvent.deltaX > 0) {
  //     e.preventDefault();
  //     $(this).slick("slickPrev");
  //   } else {
  //     return;
  //   }
  //   wheelOn = false;
  //   setTimeout(function() {
  //     wheelOn = true;
  //   }, 1000);
  // });

  $(".slick-next").html('<i class="fa fa-caret-right"></i>');
  $(".slick-prev").html('<i class="fa fa-caret-left"></i>');
}
