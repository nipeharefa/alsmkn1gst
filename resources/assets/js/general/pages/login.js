/* eslint-disable no-new */
import Vue from 'vue'
import App from '../components/login/login.vue'
import VueResource from 'vue-resource'

Vue.use(VueResource)
Vue.http.interceptors.push((request, next) => {
  request.headers['X-CSRF-TOKEN'] = document.querySelector('meta[name=_csrf]').getAttribute('content')
  next()
})
new Vue({
  el: 'body',
  components: { App }
})
