<?php get_header(); ?>
  <section>
    <div class="row">
      <div class="col">
        <custom-carousel></custom-carousel>
      </div>
    </div>
  </section>
  <section class="container pt-5">
    <div class="row mt-5">
      <div class="col">
        <h2 class="text-center subtitle">¿Quiénes somos?</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
          <staff-section></staff-section>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 mt-expand">
    <div class="row">
      <div class="col">
        <h2 class="text-center subtitle">Mapa</h2>
        <div id="map" class="mt-5 wave wave-white"></div>
      </div>
    </div>
  </section>
  <section class="py-5 dark wave wave-dark">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-center subtitle text-rose">¡Llena el formulario <br><small class="text-white">y recibe atención personalizada!</small></h2>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-md-5">
          <p class="text-white w-50">
            Asume el reto de <strong>sentirte</strong>
            y lucir como <strong>TÚ QUIERES</strong>.
          </p>
          <p class="text-white mt-5">
            El <strong>bienestar de nuestros pacientes</strong> nos motiva a dar lo mejor de nosotros cada día para ayudarlos a alcanzar sus metas.
            Somos un equipo de especialistas en <strong>nutrición, deportología y balón intragástrico</strong>, con más de 10 años de experiencia
            en el tratamiento del sobrepeso y la obesidad.
          </p>
        </div>
        <div class="col-md-5">
          <div class="border border-secondary contact-form-container p-4">
            <h3 class="text-center form-title text-blue mb-4">¡Te llamaremos!</h3>
            <?php echo do_shortcode('[contact-form-7 id="6" title="Principal"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer() ?>