
require('./bootstrap');
require('./script');
import SlitherSlider from 'slither-slider';

window.Vue = require('vue').default;

Vue.use(SlitherSlider);
Vue.component('slider', require('./components/slider.vue').default);

const app = new Vue({
    el: '#app',
});
