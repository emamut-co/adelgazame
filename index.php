<?php get_header(); ?>
  <section>
    <div class="row">
      <div class="col">
      </div>
    </div>
  </section>
  <section class="container pt">
    <div class="row">
      <div class="col">
        <h2 class="text-center subtitle">¿Quiénes somos?</h2>
        <div class="row justify-content-center row-cols-1 row-cols-md-3 mt-5">
          <div class="col mb-4" v-for="(staff, key) in staffArray">
            <div class="card staff">
              <img :src="staff.custom_fields.staff_image" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title mb-0" :class="getStaffTitleClass(key)">
                  <small>{{ staff.custom_fields.staff_treatment[0] }}</small><br>
                  {{ staff.post_title }}
                </h5>
                <p class="card-text">{{ staff.custom_fields.staff_degree[0] }}</p>
                <p class="card-text mt-4" v-html="staff.custom_fields.staff_text[0]"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt">
    <div class="row">
      <div class="col">
        <h2 class="text-center subtitle">Mapa</h2>
        <div id="map" class="mt-5"></div>
      </div>
    </div>
  </section>
  <section class="pb-5 pt dark">
    <div class="row">
      <div class="col">
        <h2 class="text-center subtitle text-rose">¡Llena el formulario <br><small class="text-white">y recibe atención personalizada!</small></h2>
      </div>
    </div>
    <div class="row justify-content-center mt-4">
      <div class="col-md-4">
        <p class="text-white w-50">
          Asume el reto de <strong>sentirte</strong>
          y lucir como <strong>TÚ QUIERES</strong>.
        </p>
        <p class="text-white mt-4">
          El <strong>bienestar de nuestros pacientes</strong> nos motiva a dar lo mejor de nosotros cada día para ayudarlos a alcanzar sus metas.
          Somos un equipo de especialistas en <strong>nutrición, deportología y balón intragástrico</strong>, con más de 10 años de experiencia
          en el tratamiento del sobrepeso y la obesidad.
        </p>
      </div>
      <div class="col-md-4">
        <div class="border border-secondary rounded p-4">
          <h3 class="text-center form-title text-blue mb-4">¡Te llamaremos!</h3>
          <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer() ?>