$(document).ready(function(){
  $('.jumbotron').show();
  $('.carousel').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    speed: 100,
    cssEase: 'ease-in-out',
  });
  $('.slick-next').html('<i class="fa fa-caret-right"></i>');
  $('.slick-prev').html('<i class="fa fa-caret-left"></i>');
});
