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
  methods: {
    getTitleClass: function (key) {
      if (key % 2 === 0)
        return 'text-rose'
      else
        return 'text-blue'
    },
    getSlideItems(key) {
      console.log("getSlideItems -> key", key)
      return `
        <div class="col mb-4">
          <div class="card staff">
            <img src="` + this.getArrayElement(key, 'post_image') + `" alt="" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title mb-0 ` + this.getTitleClass(key) + `">
                <small>` + this.getArrayElement(key, 'staff_treatment') + `</small><br>
                ` + this.getArrayElement(key, 'post_title') + `
              </h5>
              <p class="card-text">` + this.getArrayElement(key, 'staff_degree') + `</p>
              <p class="card-text mt-4">` + this.getArrayElement(key, 'staff_text') + `</p>
            </div>
          </div>
        </div>
      `
    },
    getArrayElement(key, item) {
      key -= 1

      if(item === 'post_image')
        return this.staffArray[key].post_image

      if(item === 'staff_treatment')
        return this.staffArray[key].custom_fields.staff_treatment[0]

      if(item === 'post_title')
        return this.staffArray[key].post_title

      if(item === 'staff_degree')
        return this.staffArray[key].custom_fields.staff_degree[0]

      if(item === 'staff_text')
        return this.staffArray[key].custom_fields.staff_text[0]
    }
  },
  template: `
    <div class="carousel slide" data-ride="carousel" id="staff-carousel">
      <div class="carousel-inner">
        <div class="row justify-content-center row-cols-1 row-cols-md-3 mt-5 carousel-item" :class="{'active': key == 1}" v-for="key in staffArray.length">
          <div v-html="getSlideItems(key)"></div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#staff-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#staff-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    `
})