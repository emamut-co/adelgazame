jQuery(document).ready(function ($) {
  $('#main-carousel-prev').on('click', function () {
    $('#main-carousel').carousel('prev')
  })
  $('#main-carousel-next').on('click', function () {
    $('#main-carousel').carousel('next')
  })
})