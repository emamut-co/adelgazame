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

  $('#navbar-main').find('.collapse.navbar-collapse').append(`
    <form action="${siteURL}" method="get" id="search-form">
      <div class="input-group mb-3">
        <input type="text" placeholder="Deseo saber sobre…" name="s" class="form-control" aria-label="close" aria-describedby="input-addon" />
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-search"></i> <i class="fas fa-times ml-2"></i>
          </span>
        </div>
      </div>
    </form>
    <span class="navbar-text" id="search-button"><i class="fas fa-search"></i></span>
  `)

  $('#search-button').on('click', function (e) {
    toggleClass()
  })

  $('#search-form').find('i').on('click', function (e) {
    if($(this).hasClass('fa-search')) {
      $('#search-form').submit()
    }
    if($(this).hasClass('fa-times')) {
      toggleClass()
    }
  })

  $('#searchform').find('input[type="text"]').attr('placeholder', 'Deseo leer sobre…')

  // Calculator section
  $('#calculator-modal').modal('show')
  $('#part-2, #part-3').addClass('hide')

  $('.VueCarousel-navigation-prev, .VueCarousel-navigation-next').css('padding', '6rem')
  $('.VueCarousel-navigation-prev').html(`<img src="${themePath}/img/angle-left-gray.png" alt="" class="img-fluid"/>`)
  $('.VueCarousel-navigation-next').html(`<img src="${themePath}/img/angle-right-gray.png" alt="" class="img-fluid"/>`)

  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function () {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });

  function toggleClass() {
    $('#search-form').toggleClass('show')
    $('#search-button').toggleClass('d-none')
  }
})