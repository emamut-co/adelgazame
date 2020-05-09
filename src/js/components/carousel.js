Vue.component('customCarousel', {
  data () {
    return {
      sliderArray: [],
      themePath: themePath,
      window: {
        width: 0,
        height: 0
      }
    }
  },
  mounted () {
    let self = this

    axios.get(siteURL + '/wp-json/slider/v1/get')
      .then(function (response) {
        self.sliderArray = response.data
      })
  },
  created() {
    window.addEventListener('resize', this.handleResize);
    this.handleResize();
  },
  destroyed() {
    window.removeEventListener('resize', this.handleResize);
  },
  methods: {
    handleResize() {
      this.window.width = window.innerWidth
      this.window.height = window.innerHeight
    }
  },
  template: `
    <div id="main-carousel" class="carousel slide wave-carousel" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item" :class="{ 'active': key === 0 }" v-for="(slide, key) in sliderArray">
          <img :src="window.width >= 768 ? slide.post_image : slide.custom_fields.slide_mobile_image[0]" class="d-block w-100" alt="...">
          <div class="carousel-caption px-4">
            <h5 class="title">{{ slide.post_title }}</h5>
            <div v-html="slide.custom_fields.slide_text[0]"></div>
            <a :href="slide.custom_fields.slide_button_url[0]" class="btn btn-secondary mt-45">{{ slide.custom_fields.slide_button_text[0] }}</a>
          </div>
        </div>
      </div>
      <a v-if="sliderArray.length > 1" class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
        <img :src="themePath + '/img/angle-left.png'" alt="" class="img-fluid"/>
        <span class="sr-only">Previous</span>
      </a>
      <a v-if="sliderArray.length > 1" class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
        <img :src="themePath + '/img/angle-right.png'" alt="" class="img-fluid"/>
        <span class="sr-only">Next</span>
      </a>
      <img :src="themePath + '/img/scroll-down.png'" id="scroll-down" alt="" class="img-fluid pulse"/>
    </div>`
})