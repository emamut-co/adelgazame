Vue.component('customCarousel', {
  props: {
    'slider': String,
    'color': String,
    default: 'blue'
  },
  data: function () {
    return {
      sliderArray: [],
      themePath: themePath
    }
  },
  mounted () {
    let self = this

    axios.get(siteURL + '/wp-json/slider/v1/get?slider=' + this.slider)
      .then(function (response) {
        self.sliderArray = response.data
      })
  },
  methods: {
    getClass: function () {
      if(typeof this.color  !== 'undefined')
        return 'wave-carousel-' + this.color
      return 'wave-carousel-blue'
    }
  },
  template: `
    <div id="main-carousel" class="carousel slide" :class="getClass()" data-ride="carousel">
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
      <a v-if="sliderArray.length > 1" class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a v-if="sliderArray.length > 1" class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>`
})