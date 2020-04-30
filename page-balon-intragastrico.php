<?php get_header();
  set_query_var('sideContent', '<h2 class="subtitle">
          Baja de peso <span class="caveat text-secondary">ahora</span> sin cirugía Balón intragástrico
        </h2>
        <ul class="mt-4">
          <li>Un procedimiento eficaz, indoloro y mínimamente invasivo</li>
          <li>Permite bajar de peso rápido y de forma segura</li>
          <li>En apenas 6 meses, puedes llegar a perder hasta 20 kg</li>
        </ul>'); ?>
  <section class="wave-dark-bottom">
    <?php get_template_part('template-parts/main-section'); ?>
  </section>
  <section class="py-5 dark wave-dark">
    <div class="row pt-5">
      <div class="col">
        <h2 class="text-center text-rose subtitle">Beneficios y características <br>
        <small class="text-white">del balón gástrico</small></h2>
      </div>
    </div>
    <div class="container">
      <div class="row mt-5 pt-5">
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/balon1.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
              El Balón Intragástrico es un balón de silicona suave, que se introduce desinflado en el estómago a través de la boca, sin necesidad de cirugía y bajo sedación. Luego se llena con una solución estéril hasta alcanzar el tamaño adecuado. El tiempo en colocar el balón oscila entre 20 y 30 minutos.
              Es un procedimiento ambulatorio, por lo que el paciente podrá regresar a casa al cabo de unas horas.
          </p>
        </div>
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/balon2.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
              Para obtener mayores beneficios, se recomienda que este procedimiento vaya acompañado de la
              incorporación de hábitos saludables y una alimentación balanceada, bajo la supervisión de especialistas.
              En Clínica Adelgáza.me te ofrecemos un plan personalizado según tus necesidades y metas.
              El balón debe permanecer en el estómago durante 6 meses. Pasado este tiempo, se retira de la misma forma en que fue colocado.
          </p>
        </div>
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/balon3.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
              La colocación del balón intragástrico permite a los pacientes con sobrepeso y obesidad alcanzar su peso ideal en poco tiempo.
              La reducción de peso y medidas representa un beneficio integral para la salud porque no solo
              disminuyen los factores de riesgo para enfermedades cardiovasculares, también conseguirás verte como siempre has querido.
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/calculator-section') ?>
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
          <div class="text-center mt-4">
            <a href="#schedule-form" class="btn btn-secondary">Agendar una cita</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="dark py-5 wave-dark" id="schedule-form">
    <div class="container">
      <div class="row justify-content-center mt-expand">
        <div class="col-md-8">
          <h2 class="text-center text-rose subtitle">Agenda <span class="caveat text-white">ahora</span> tu cita</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-md-5">
          <div class="border border-secondary contact-form-container p-4 mt-4">
            <h3 class="text-center form-title text-blue mb-4">¡Te llamaremos!</h3>
            <?php echo do_shortcode('[contact-form-7 id="6" title="Principal"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>