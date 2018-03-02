window.Vue = require('vue');
window.axios = require('axios');
window.ElementUI = require('element-ui');

require('element-ui/lib/theme-chalk/index.css');

Vue.use(ElementUI)

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

Vue.component('demo-component', require('./components/demo.vue'));
Vue.component('menu-component', require('./components/menu.vue'));

const app = new Vue({
  el: '#app'
});