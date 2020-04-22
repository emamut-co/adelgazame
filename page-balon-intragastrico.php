<?php get_header(); ?>
  <section>
    <div class="row">
      <div class="col">
        <custom-carousel slider="balon"></custom-carousel>
      </div>
    </div>
  </section>
  <section class="py-5 dark wave-dark">
    <div class="row pt-5">
      <div class="col">
        <h2 class="text-center text-rose subtitle">Beneficios y características <br>
        <small class="text-white">del balón gástrico</small></h2>
      </div>
    </div>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/balon1.png" alt="" class="img-fluid">
          </div>
          <p class="mt-3">
            <small>
              El Balón Intragástrico es un balón de silicona suave, que se introduce desinflado en el estómago a través de la boca, sin necesidad de cirugía y bajo sedación. Luego se llena con una solución estéril hasta alcanzar el tamaño adecuado. El tiempo en colocar el balón oscila entre 20 y 30 minutos.
              Es un procedimiento ambulatorio, por lo que el paciente podrá regresar a casa al cabo de unas horas.
            </small>
          </p>
        </div>
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/balon2.png" alt="" class="img-fluid">
          </div>
          <p class="mt-3">
            <small>
              Para obtener mayores beneficios, se recomienda que este procedimiento vaya acompañado de la
              incorporación de hábitos saludables y una alimentación balanceada, bajo la supervisión de especialistas.
              En Clínica Adelgáza.me te ofrecemos un plan personalizado según tus necesidades y metas.
              El balón debe permanecer en el estómago durante 6 meses. Pasado este tiempo, se retira de la misma forma en que fue colocado.
            </small>
          </p>
        </div>
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/balon3.png" alt="" class="img-fluid">
          </div>
          <p class="mt-3">
            <small>
              La colocación del balón intragástrico permite a los pacientes con sobrepeso y obesidad alcanzar su peso ideal en poco tiempo.
              La reducción de peso y medidas representa un beneficio integral para la salud porque no solo
              disminuyen los factores de riesgo para enfermedades cardiovasculares, también conseguirás verte como siempre has querido.
            </small>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-calculator wave-white-bottom py-5">
    <div class="container">
      <div class="row py-5">
        <div class="col-md-6">
          <div class="media">
            <img src="<?php echo get_template_directory_uri() ?>/img/bascula.png" alt="" class="mr-3">
            <div class="media-body">
              <h5 class="mt-0 text-white">
                Calculadora de <br>
                <strong>
                  Índice de Masa Corporal <br>
                  (IMC)
                </strong>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <p class="text-white">Se utiliza para estimar la cantidad de grasa corporal que tiene una
          persona, y determinar por tanto si el peso está dentro del rango normal, o por el
          contrario, se tiene sobrepeso o delgadez.</p>
          <button class="btn btn-secondary mt-3">Conoce tu IMC</button>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 wave-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h2 class="text-center subtitle">¿Cuándo es necesario un balón intragástrico?</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-4 pb-5">
        <div class="col-md-5">
          <p>
            Se aconseja este tratamiento para aquellas personas que padecen
            <strong>sobrepeso u obesidad</strong> (Índice de Masa Corporal IMC cercano o superior a 30 Kg / m2)
          </p>
          <p>
            También para quienes han <strong>fracasado repetitivamente con tratamientos dietéticos</strong>, farmacológicos y de modificación de la conducta. La colocación del balón rompe el círculo vicioso que se crea cuando un paciente no es capaz de mantener un régimen de forma continuada.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="dark py-5 wave-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <h2 class="text-center text-rose subtitle">Agenda <span class="caveat text-white">ahora</span> tu cita</h2>
          <div class="border border-secondary rounded p-4 mt-4">
            <h3 class="text-center form-title text-blue mb-4">¡Te llamaremos!</h3>
            <?php echo do_shortcode('[contact-form-7 id="6" title="Principal"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>