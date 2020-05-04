Vue.component('staffSection', {
  data: function () {
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
    },
    getTitleClass: function (key) {
      if (key % 2 === 0)
        return 'rose'
      else
        return 'blue'
    }
  },
  template: `
    <carousel :perPageCustom="[[480, 1], [768, 2]]"
      :autoplay="true"
      :autoplay-timeout="4000"
      :loop="true"
      pagination-color="#707070"
      pagination-active-color="#2A7DE1"
      :navigation-enabled="true">
      <slide class="p-2" v-for="(staff, key) in staffArray" :key="key">
        <b-card :title="staff.custom_fields.staff_treatment[0]"
          :sub-title="staff.post_title"
          :img-src="staff.post_image"
          img-alt="Image" img-top class="staff" :class="getTitleClass(key)" tag="article">
          <b-card-text>
            <p class="card-text text-center" v-html="staff.custom_fields.staff_degree[0]"></p>
            <p class="card-text" v-html="staff.custom_fields.staff_text[0]"></p>
          </b-card-text>
        </b-card>
      </slide>
    </carousel>
    `
})