<?php get_header(); ?>
  <section class="wave wave-dark-bottom">
    <main-section page="balon-intragastrico"></main-section>
  </section>
  <section class="py-5 dark wave wave-dark">
    <div class="row pt-5">
      <div class="col">
        <h2 class="text-center text-rose subtitle">Balón Gástrico Digerible en Cápsula <br>
        <small class="text-white">beneficios y carácteristicas</small></h2>
      </div>
    </div>
    <div class="container">
      <benefits-section page="balon-intragastrico"></benefits-section>
    </div>
  </section>
  <?php get_template_part('template-parts/calculator-section') ?>
  <section class="py-5 wave wave-white">
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
  <section class="dark py-5 wave wave-dark" id="schedule-form">
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