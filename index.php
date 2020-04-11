<?php get_header(); ?>
  <section>
    <div class="row">
      <div class="col">
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item" :class="{ 'active': key === 0 }" v-for="(slide, key) in sliderArray">
              <img :src="slide.slide_image" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block px-4">
                <h5 class="title">{{ slide.post_title }}</h5>
                <div v-html="slide.custom_fields.slide_text[0]"></div>
                <a :href="slide.custom_fields.slide_button_url[0]" class="btn btn-secondary mt-45">{{ slide.custom_fields.slide_button_text[0] }}</a>
              </div>
            </div>
          </div>
          <div class="carousel-controls-container py-4 pl-4">
            <button class="btn btn-secondary text-white" id="main-carousel-prev"><i class="fa fa-angle-left fa-2x"></i></button>
            <button class="btn btn-secondary text-white" id="main-carousel-next"><i class="fa fa-angle-right fa-2x"></i></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container pt-5">
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
  <section class="pt-5">
    <div class="row">
      <div class="col">
        <h2 class="text-center subtitle">Mapa</h2>
        <div id="map" class="mt-5"></div>
      </div>
    </div>
  </section>
  <section class="py-5 dark">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-center subtitle text-rose">¡Llena el formulario <br><small class="text-white">y recibe atención personalizada!</small></h2>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-md-3">
          <p class="text-white">
            Asume el reto de <strong>sentirte</strong><br>
            y lucir como <strong>TÚ QUIERES</strong>.
          </p>
          <p class="text-white mt-4">
            El <strong>bienestar de nuestros pacientes</strong> nos motiva a dar lo mejor de nosotros cada día para ayudarlos a alcanzar sus metas.
            Somos un equipo de especialistas en <strong>nutrición, deportología y balón intragástrico</strong>, con más de 10 años de experiencia
            en el tratamiento del sobrepeso y la obesidad.
          </p>
        </div>
        <div class="col-md-3">
          <div class="border border-secondary rounded p-4">
            <h3 class="text-center form-title text-blue mb-4">¡Te llamaremos!</h3>
            <?php echo do_shortcode('[contact-form-7 id="6" title="Principal"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    let pageSlug = '<?php echo $post_name ?>'
  </script>
<?php get_footer() ?>