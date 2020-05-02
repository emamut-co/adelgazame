Vue.component('plansSection', {
  data: function () {
    return {
      plansArray: []
    }
  },
  mounted() {
    let self = this

    axios.get(siteURL + '/wp-json/plans/v1/get')
      .then(function (response) {
        self.plansArray = response.data
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
    <carousel :per-page="2"
      :autoplay="true"
      :autoplay-timeout="4000"
      :loop="true"
      pagination-color="#707070"
      pagination-active-color="#2A7DE1"
      :navigation-enabled="true">
      <slide class="p-2" v-for="(plan, key) in plansArray" :key="key">
        <div class="card plans">
          <b-card title="Plan para bajar de peso"
            :sub-title="plan.post_title"
            :img-src="plan.post_image"
            img-alt="Image" img-top class="plans bg-light" tag="article">
            <b-card-text class="mt-2">
              <p class="card-text mt-2 text-muted" v-html="plan.post_content"></p>
              <button class="btn btn-secondary d-block mx-auto" data-toggle="modal" data-target="#schedule-modal">
                ¡Lo quiero!
              </button>
            </b-card-text>
          </b-card>
        </div>
      </slide>
    </carousel>`
})