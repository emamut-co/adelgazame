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
  template: `
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mt-5">
      <div class="col mb-4" v-for="(plan, key) in plansArray">
        <div class="card plans">
          <img :src="plan.post_image" alt="" class="card-img-top">
          <div class="card-body bg-light">
            <h5 class="card-title mb-0">
              <small>Plan para bajar de peso</small><br>
              <span class="text-secondary"><strong>{{ plan.post_title }}</strong></span>
            </h5>
            <div class="card-text mt-2 text-muted" v-html="plan.post_content"></div>
            <div class="text-center w-100">
              <button class="btn btn-secondary" data-toggle="modal" data-target="#schedule-modal">
                ¡Lo quiero!
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>`
})