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
  template: `
    <div class="row justify-content-center mt-5">
      <div col-md-12 v-for="(staff, key) in staffArray">
        <div class="row">
          <div class="col-md-6">
            <img :src="staff.custom_fields.staff_big_image_url[0]" class="img-fluid" alt="">
          </div>
          <div class="col-md-6 my-auto">
            <h5 class="text-primary align-self-center">
              <small class="text-muted">{{ staff.custom_fields.staff_treatment[0] }}</small><br>
              {{ staff.post_title }}
            </h5>
            <p>{{ staff.custom_fields.staff_degree[0] }}</p>
            <p class="mt-4" v-html="staff.custom_fields.staff_text[0]"></p>
          </div>
        </div>
      </div>
    </div>`
})