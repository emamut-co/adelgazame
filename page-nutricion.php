<?php get_header();
  set_query_var('sideContent', '<h2 class="subtitle">
          Aliméntate sin <span class="caveat text-secondary">condiciones</span>
        </h2>
        <ul class="mt-4">
          <li>Aprende a comer deliciosamente nutritivo</li>
          <li>Mejora tu salud con una alimentación correcta</li>
          <li>Nutre tu día a día</li>
        </ul>');
  get_template_part('template-parts/main-section'); ?>
  <!-- <section class="wave-white py-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <staff-page page="nutricion"></staff-page>
        </div>
      </div>
    </div>
  </section> -->
  <section class="py-5 dark wave-dark">
    <div class="row pt-5">
      <div class="col">
        <h2 class="text-center text-rose subtitle">Beneficios <br>
        <small class="text-white">de la buena nutrición</small></h2>
      </div>
    </div>
    <div class="container">
      <div class="row mt-5 pt-5">
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/nutricion1.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
            <small>
              Alimentarse de manera saludable permite mantener la mente despierta. El cerebro necesita determinados
              nutrientes para llevar a cabo sus funciones, por lo que llevar una dieta adecuada permite el flujo
              constante de dichos nutrientes, generando un óptimo funcionamiento del organismo.
            </small>
          </p>
        </div>
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/nutricion2.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
            <small>
              La selección adecuada de los productos que ingerimos proporciona una mayor capacidad de respuesta
              del sistema inmune, lo que permite que éste se defienda eficientemente de los agentes extraños.
              Así se reduce el riesgo de padecer infecciones.
            </small>
          </p>
        </div>
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/nutricion3.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
            <small>
              Determinados nutrientes como el hierro, ácido fólico, algunas vitaminas del grupo B, o los ácidos
              grasos omega-3, influyen en nuestro estado de ánimo. En esto radica la importancia de llevar una
              dieta variada, pues con la cantidad necesaria de nutrientes, se mantendrá el equilibrio en nuestro
              estado de ánimo y una actitud positiva en nosotros.
            </small>
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
          <h2 class="text-center subtitle">Conoce los servicios que tenemos para ti</h2>
        </div>
      </row>
      <div class="row justify-content-center mt-4 pb-5">
        <div class="col-md-8">
          <plans-section></plans-section>
        </div>
      </div>
    </div>
  </section>
  <section class="dark wave-dark py-5">
    <div class="container">
      <div class="row justify-content-center">
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