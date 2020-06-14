<?php get_header();
  set_query_var('sideContent', '<h2 class="subtitle">
          ¿List@ para llegar a tu <span class="caveat text-primary">peso ideal?</span>
        </h2>
        <ul class="mt-4">
          <li>Entrenamiento hecho a tu medida</li>
          <li>Nos adaptamos a tus horarios</li>
          <li>Mejora tu calidad de vida</li>
        </ul>'); ?>
  <section class="wave wave-white-bottom">
    <?php get_template_part('template-parts/main-section'); ?>
  </section>
  <section class="wave wave-dark-bottom py-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <staff-page page="deportologia"></staff-page>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 dark wave wave-dark">
    <div class="row pt-5">
      <div class="col">
        <h2 class="text-center text-rose subtitle">Beneficios <br>
        <small class="text-white">del ejercicio</small></h2>
      </div>
    </div>
    <div class="container">
      <div class="row mt-5 pt-5">
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/deportologia1.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
            <small>
              Realizar actividad física de forma regular, permite mantener una buena salud, fomenta la disciplina
              y fortalece el carácter. También favorece el bienestar mental, mejora la memoria y la rapidez de las ideas.
              Es un aliado ideal para aumentar la autoestima.
            </small>
          </p>
        </div>
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/deportologia2.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
            <small>
              <p>
                Los ejercicios para mejorar la forma física, se deben realizar de forma progresiva, en dependencia de la
                condición y necesidades de cada cual.
              </p>
              <p>
                El ejercicio físico también incrementa la densidad ósea, ayuda a mantener el peso corporal, mejora la
                flexibilidad y la movilidad de las articulaciones, reduce la sensación de fatiga, entre otros.
              </p>
            </small>
          </p>
        </div>
        <div class="col-md-4 text-white">
          <div class="w-100 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/deportologia3.png" alt="" class="img-fluid">
          </div>
          <p class="my-5 py-3">
            <small>
              Nuestro cerebro demora aproximadamente 1 mes en crear un hábito. <strong>¿No estás adaptad@ o no tienes el hábito del ejercicio físico?</strong> <br>
              En Clínica Adelgáza.me te ayudamos <strong>¡TÚ PUEDES LOGRARLO! Asume el reto</strong>. Supera con nosotros la barrera del primer mes.
            </small>
          </p>
        </div>
      </div>
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
          <plans-section page="deportologia"></plans-section>
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