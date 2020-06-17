Vue.component('benefitsSection', {
  props: ['page'],
  data() {
    return {
      benefitsArray: []
    }
  },
  mounted() {
    let self = this

    axios.get(siteURL + '/wp-json/benefits/v1/get?page=' + this.page)
      .then(function (response) {
        self.benefitsArray = response.data
      })
  },
  template: `
    <div class="row mt-5 pt-5">
      <div class="col-md-4 text-white" v-for="(benefit, key) in benefitsArray" :key="key">
        <div class="w-100 text-center">
          <img :src="benefit.post_image" alt="" class="img-fluid">
        </div>
        <p class="my-5 py-3" v-html="benefit.post_content"></p>
      </div>
    </div>
    `
})