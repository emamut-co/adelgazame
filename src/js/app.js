let app = new Vue({
  el: '#app',
  data() {
    return {
      sliderArray: [],
      staffArray: []
    }
  },
  mounted () {
    let self = this

    axios.get('http://localhost/workspace/adelgazame/wp-json/slider/v1/get')
      .then(function (response) {
        self.sliderArray = response.data
      })

    axios.get('http://localhost/workspace/adelgazame/wp-json/staff/v1/get')
      .then(function (response) {
        self.staffArray = response.data
      })
  },
  methods: {
    getStaffTitleClass: function (key) {
      if (key % 2 === 0)
        return 'text-rose'
      else
        return 'text-blue'
    }
  }
})