Vue.component('staffPage', {
  props: {
    page: String
  },
  data: function () {
    return {
      staffArray: []
    }
  },
  mounted() {
    let self = this

    axios.get(siteURL + '/wp-json/staff/v1/get?page=' + this.page)
      .then(function (response) {
        self.staffArray = response.data
      })
  },
  methods: {
    getTitleClass: function (key) {
      if (key % 2 === 0)
        return 'text-rose'
      else
        return 'text-blue'
    }
  },
  template: `
    <div class="row justify-content-center row-cols-1 row-cols-md-3 mt-5">
      <div class="col mb-4" v-for="(staff, key) in staffArray">
        <div class="card staff">
          <img :src="staff.post_image" alt="" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title mb-0" :class="getTitleClass(key)">
              <small>{{ staff.custom_fields.staff_treatment[0] }}</small><br>
              {{ staff.post_title }}
            </h5>
            <p class="card-text">{{ staff.custom_fields.staff_degree[0] }}</p>
            <p class="card-text mt-4" v-html="staff.custom_fields.staff_text[0]"></p>
          </div>
        </div>
      </div>
    </div>`
})