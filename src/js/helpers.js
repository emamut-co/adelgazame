jQuery(document).ready(function ($) {
  window.onscroll = function () { scrollFunction() };

  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      $("#logo").css({
        'width': '70%',
        'transition': 'width 200ms ease-in-out, height 200ms ease-in-out'
      })
      $("#navbar-main").css({
        'height': '70px',
        'transition': 'width 200ms ease-in-out, height 200ms ease-in-out'
      })
    } else {
      $("#logo").css({
        'width': '100%',
        'transition': 'width 200ms ease-in-out, height 200ms ease-in-out'
      })
      $("#navbar-main").css({
        'height': '110px',
        'transition': 'width 200ms ease-in-out, height 200ms ease-in-out'
      })
    }
  }
})