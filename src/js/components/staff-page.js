Vue.component('staffPage', {
  props: ['page'],
  data() {
    return {
      staffArray: []
    }
  },
  mounted() {
    let self = this

    axios.get(siteURL + '/wp-json/staff/v1/get?page=' + this.page)
      .then(function (response) {
        self.staffArray = response.data[0]
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
  },
  template: `
    <div class="row">
      <carousel
      :autoplay="true"
      :autoplay-timeout="4000"
      :loop="true"
      pagination-color="#707070"
      pagination-active-color="#2A7DE1"
      :navigation-enabled="true">
        <slide class="p-2" v-for="(staff, key) in staffArray" :key="key">
          <div class="col-md-6">
            <img :src="staff.custom_fields.staff_big_image_url[0]" class="img-fluid" alt="" />
          </div>
          <div class="col-md-6 my-auto">
            <h5 class="text-primary align-self-center">
              <small class="text-muted">{{ staff.custom_fields.staff_treatment[0] }}</small><br />
              <strong>{{ staff.post_title }}</strong>
            </h5>
            <p>{{ staff.custom_fields.staff_degree[0] }}</p>
            <p class="mt-4" v-html="staff.custom_fields.staff_text[0]"></p>
          </div>
        </slide>
      </carousel>
    </div>`
})