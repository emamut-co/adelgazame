jQuery(document).ready(function ($) {
  if ($(window).width() > 768)
    window.onscroll = function () { scrollFunction() }

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
    $('#search-form').toggleClass('show')
  })

  $('#search-form').find('i').on('click', function (e) {
    if($(this).hasClass('fa-search')) {
      $('#search-form').submit()
    }
    if($(this).hasClass('fa-times')) {
      $('#search-form').toggleClass('show')
    }
  })

  $('#searchform').find('input[type="text"]').attr('placeholder', 'Deseo leer sobre…')

  // Start Calculator section
  let imcMessages = [
    {
      'text': 'Desnutrición moderada',
      'message': 'Tranquilo nuestro equipo de expertos están listos para guiarte',
      'className': 'low'
    },
    {
      'text': 'Peso normal',
      'message': 'Felicidades sabes como mantener tu peso ideal. <br> ¿Deseas llevar tu cuerpo al siguiente nivel?',
      'className': ''
    },
    {
      'text': 'Obesidad grado 1',
      'message': 'Tranquilo nuestro equipo de expertos están listos para guiarte',
      'className': 'high'
    },
    {
      'text': 'Obesidad grado 2',
      'message': 'Tranquilo nuestro equipo de expertos están listos para guiarte',
      'className': 'high'
    }
  ]

  $('#next-calculator').on('click', function (e) {
    e.preventDefault()

    if ($('#part-1').hasClass('active')) {
      let data = $('#calculator-form').serializeArray()
      console.log("window.onscroll -> data", data)

      if (data[0].value == '' || data[1].value == '' || data[3].value == '' || data[4].value == '') {
        $('#calculator-form').find('.alert').removeClass('d-none')
        return null
      }

      let message = `<strong>Objetivo:</strong>${data[2].value}<br>
          <strong>Altura:</strong>${data[3].value}<br>
          <strong>Peso:</strong>${data[4].value}<br>`,
        imc = parseFloat(data[4].value) / (parseFloat(data[3].value / 100) * parseFloat(data[3].value / 100)),
        cont

      if(imc < 18.5)
        cont = 0
      if(imc >= 18.5 && imc < 25)
        cont = 1
      if(imc >= 25 && imc < 30)
        cont = 2
      if(imc >= 30)
        cont = 3

      $('#calculator-imc-value').html(imc.toFixed(0) + '<br> <small>' + imcMessages[cont].text + '</small>')
      $('#calculator-imc-value').addClass(imcMessages[cont].className)

      $('#calculator-imc-message').html(imcMessages[cont].message)

      data.push({name: 'your-subject', value: 'Contacto desde Calculadora'})
      data.push({name: 'your-message', value: message})

      $.post(siteURL + '/wp-json/contact-form-7/v1/contact-forms/133/feedback', data, function (response) {
        console.log(response.status)
      })

      $('#calculator-form').addClass('d-none')
      $('#calculator-genre').removeClass('d-none')

      $('#part-1').removeClass('active')
      $('#part-2').addClass('active')

      return null
    }

    if($('#part-2').hasClass('active')) {
      $('#calculator-genre').addClass('d-none')
      $('#calculator-result').removeClass('d-none')

      $('#part-2').removeClass('active')
      $('#part-3').addClass('active')

      $('#next-calculator').addClass('d-none')
      $('#send-result').removeClass('d-none')
      $('#send-result').addClass('d-block')

      return null
    }
  })

  $('input[name="genre-selector"]').on('click', function (e) {
    let data = $(this).val()
    if(data == 'male') {
      $('#img-genre-male').removeClass('d-none')
      $('#img-genre-female').addClass('d-none')
    }

    if(data == 'female') {
      $('#img-genre-male').addClass('d-none')
      $('#img-genre-female').removeClass('d-none')
    }
  })

  $('#send-result').on('click', function () {
    $('#calculator-result').find('.alert').removeClass('d-none')
    setTimeout(function () {
      $("#calculator-modal").modal('hide');
    }, 2000);
  })
  // End Calculator section

  // if (window.width > 768)
    // $('.VueCarousel-navigation-prev, .VueCarousel-navigation-next').css('padding', '6rem')

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
})