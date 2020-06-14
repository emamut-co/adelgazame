Vue.component('mainSection', {
  props: ['page'],
  data() {
    return {
      pageContent: ''
    }
  },
  mounted() {
    let self = this

    axios.get(siteURL + '/wp-json/page/v1/get?page=' + this.page)
      .then(function (response) {
        self.pageContent = response.data
      })
  },
  template: `
    <div class="row">
      <div class="col main-section" :style="{background: 'url(' + pageContent.post_image + ')'}">
        <div class="side-container">
          <div v-html="pageContent.post_content"></div>
          <div class="contact-form-container p-4 mt-4">
            <h3 class="text-center form-title text-blue mb-4">¡Te llamaremos!</h3>
            [contact-form-7 id="6" title="Principal"]
          </div>
        </div>
        <img src="${themePath}/img/scroll-down.png" id="scroll-down" alt="" class="img-fluid pulse"/>
      </div>
    </div>
    `
})