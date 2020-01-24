require('./bootstrap');  
window.Vue = require('vue');
import router from './router';


const app = new Vue({
  router
}).$mount('#app')