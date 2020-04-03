let app = new Vue({
  el: '#app',
  data() {
    return {
      sliderArray: []
    }
  },
  mounted () {
    let self = this

    axios.get('http://localhost/workspace/adelgazame/wp-json/slider/v1/get')
      .then(function (response) {
        self.sliderArray = response.data
      })
  }
})