<?php get_header(); ?>
  <section class="wave wave-white-bottom">
    <main-section page="nutricion"></main-section>
  </section>
  <section class="wave wave-dark-bottom py-5">
    <div class="container">
      <staff-page page="nutricion"></staff-page>
    </div>
  </section>
  <section class="py-5 dark wave wave-dark">
    <div class="row pt-5">
      <div class="col">
        <h2 class="text-center text-rose subtitle">Beneficios <br>
        <small class="text-white">de la buena nutrición</small></h2>
      </div>
    </div>
    <div class="container">
      <benefits-section page="nutricion"></benefits-section>
    </div>
  </section>
  <?php get_template_part('template-parts/calculator-section') ?>
  <section class="py-5 wave wave-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h2 class="text-center subtitle">Conoce los servicios que tenemos para ti</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-4 pb-5">
        <div class="col-md-8">
          <plans-section page="nutricion"></plans-section>
        </div>
      </div>
    </div>
  </section>
  <section class="dark wave wave-dark py-5">
    <div class="container">
      <div class="row justify-content-center mt-expand">
        <div class="col-md-5">
          <h2 class="text-center text-rose subtitle">Agenda <span class="caveat text-white">ahora</span> tu cita</h2>

          <div class="border border-secondary contact-form-container p-4 mt-4">
            <h3 class="text-center form-title text-blue mb-4">¡Te llamaremos!</h3>
            <?php echo do_shortcode('[contact-form-7 id="6" title="Principal"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>