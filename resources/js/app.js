
require('./bootstrap');
require('./script');
import  BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import SlitherSlider from 'slither-slider';

window.Vue = require('vue').default;

Vue.use(BootstrapVue);
Vue.use(SlitherSlider);
Vue.component('slider', require('./components/slider.vue').default);

const app = new Vue({
    el: '#app',
});
