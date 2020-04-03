<?php get_header(); ?>
  <section>
    <div class="row">
      <div class="col">
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item" :class="{ 'active': key === 0 }" v-for="(slide, key) in sliderArray">
              <img :src="slide.custom_fields.slide_image" class="d-block w-100" alt="...">
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
  <section class="container mt">
    <div class="row">
      <div class="col">
        <h2 class="text-center subtitle">¿Quiénes somos?</h2>
        <div class="row row-cols-1 row-cols-md-2 mt-5">
          <div class="col-2 mb-4">
            <div class="card who">
              <img src="https://via.placeholder.com/120" alt="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Doctora</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer() ?>