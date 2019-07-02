import Vue from 'vue';
require('./bootstrap');
import App from './App.vue'

import router from './router'
import store from './store/store'


//axios
import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);

//bootstrap VUE
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue)

//carousel vue
import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

//stripe
import VueStripeCheckout from 'vue-stripe-checkout';
Vue.use(VueStripeCheckout, 'pk_test_UsC2qjBr6F3TWoWSrlkkexgS');

//font awesome : icon
library.add( faTimes, faTextHeight, faCamera, faQuestion, faPencilAlt, faTrash, faPlusCircle, faPaperPlane, faImages, faCartArrowDown, faTruck, faLongArrowAltDown, faFacebook, faTwitter, faInstagram, faFacebookMessenger, faMapMarkerAlt, faAt,  faTty, faUser, faAngleDown, faShoppingBasket)
Vue.component('font-awesome-icon', FontAwesomeIcon)
import { library } from '@fortawesome/fontawesome-svg-core'
import {  faTimes, faTextHeight, faCamera, faQuestion, faPencilAlt, faTrash, faPlusCircle, faPaperPlane, faImages, faCartArrowDown, faTruck, faLongArrowAltDown, faMapMarkerAlt, faAt, faTty, faUser, faAngleDown, faShoppingBasket } from '@fortawesome/free-solid-svg-icons'
import { faFacebook, faTwitter, faInstagram, faFacebookMessenger } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

new Vue({
    router,
    store,
    render: h => h(App)

}).$mount('#app')


