Vue.component('customCarousel', {
  props: ['slider'],
  data: function () {
    return {
      sliderArray: []
    }
  },
  mounted () {
    let self = this

    console.log(this.slider)
    axios.get(siteURL + '/wp-json/slider/v1/get?slider=' + this.slider)
      .then(function (response) {
        self.sliderArray = response.data
      })
  },
  template: `
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item" :class="{ 'active': key === 0 }" v-for="(slide, key) in sliderArray">
          <img :src="slide.post_image" class="d-block w-100" alt="...">
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
    </div>`
})