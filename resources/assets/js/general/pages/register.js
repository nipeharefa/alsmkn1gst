/* eslint-disable no-new */
import Vue from 'vue'
import App from '../components/register/register.vue'
import VueResource from 'vue-resource'
import VueValildator from 'vue-validator'

Vue.use(VueResource)
Vue.use(VueValildator)
Vue.http.interceptors.push((request, next) => {
  request.headers['X-CSRF-TOKEN'] = document.querySelector('meta[name=_csrf]').getAttribute('content')
  next()
})
new Vue({
  el: 'body',
  components: { App }
})
