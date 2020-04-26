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
        'height': '6rem',
        'transition': transition
      })
      $('#schedule-button').css({
        'top': '6.5rem',
        'transition': 'top 200ms ease-in-out'
      })
    } else {
      $("#logo").css({
        'width': '100%',
        'transition': transition
      })
      $("#navbar-main").css({
        'height': '10rem',
        'transition': transition
      })
      $('#schedule-button').css({
        'top': '10.5rem',
        'transition': 'top 200ms ease-in-out'
      })
    }
  }

  $('#schedule-modal').modal('show')
  $('#navbar-main').find('.collapse.navbar-collapse').append(`
    <span class="navbar-text"><i class="fas fa-search"></i></span>
  `)
})