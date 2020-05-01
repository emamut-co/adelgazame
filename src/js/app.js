let app = new Vue({
  el: '#app',
  data() {
    return {
      staffArray: []
    }
  },
  mounted() {
    let self = this

    axios.get(siteURL + '/wp-json/staff/v1/get')
      .then(function (response) {
        self.staffArray = response.data
      })
  },
  components: {
    'carousel': VueCarousel.Carousel,
    'slide': VueCarousel.Slide
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true
    },
    onSlideEnd(slide) {
      this.sliding = false
    }
  }
})