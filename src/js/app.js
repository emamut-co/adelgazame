let app = new Vue({
  el: '#app',
  data() {
    return {
      staffArray: []
    }
  },
  mounted () {
    let self = this

    axios.get(siteURL + '/wp-json/staff/v1/get')
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