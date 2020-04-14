jQuery(document).ready(function ($) {
  window.onscroll = function () { scrollFunction() };

  function scrollFunction() {
    var transition = 'width 200ms ease-in-out, height 200ms ease-in-out'

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      $("#logo").css({
        'width': '70%',
        'transition': transition
      })
      $("#navbar-main").css({
        'height': '60px',
        'transition': transition
      })
    } else {
      $("#logo").css({
        'width': '100%',
        'transition': transition
      })
      $("#navbar-main").css({
        'height': '110px',
        'transition': transition
      })
    }
  }

  // $('#navbar-main li:not(:first-child)').addClass('ml-0 ml-md-4')
})