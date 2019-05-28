require('./bootstrap');

import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

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

//font awesome : icon
library.add(faPaperPlane, faImages, faCartArrowDown, faTruck, faLongArrowAltDown, faFacebook, faTwitter, faInstagram, faFacebookMessenger, faMapMarkerAlt, faAt,  faTty, faUser, faAngleDown, faShoppingBasket)
Vue.component('font-awesome-icon', FontAwesomeIcon)
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPaperPlane, faImages, faCartArrowDown, faTruck, faLongArrowAltDown, faMapMarkerAlt, faAt, faTty, faUser, faAngleDown, faShoppingBasket } from '@fortawesome/free-solid-svg-icons'
import { faFacebook, faTwitter, faInstagram, faFacebookMessenger } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import ImageUploader from 'vue-image-upload-resize'
Vue.use(ImageUploader);

//view import
window.Vue = require('vue')


import App from './App.vue'
import Home from './Views-Vue/Home.vue'
import MentionLegal from './Views-Vue/MentionLegal.vue'
import Entreprise from './Views-Vue/Entreprise.vue'
import Goodies from './Views-Vue/Goodies.vue'
import Produits from './Views-Vue/Produits.vue'
import Compte from './Views-Vue/Compte.vue'
import FaqContact from './Views-Vue/FaqContact.vue'
import ImageOrdinateur from './Views-Vue/ImageOrdinateur.vue'
import Login from './Views-Vue/Login.vue'
import Register from './Views-Vue/Register.vue'
import Profile from './Views-Vue/Profil.vue'
import Panier from './Views-Vue/Panier.vue'
import CreationMugs from './Views-Vue/CreationMugs.vue'
import CreationCadrePhoto from './Views-Vue/CreationCadrePhoto.vue'
import CreationCalendrier from './Views-Vue/CreationCalendrier.vue'
import CreationMemorie from './Views-Vue/CreationMemorie.vue'
import CreationAlbum from './Views-Vue/CreationAlbum.vue'
import Error from './Views-Vue/Error.vue'




const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            name: 'Home',
            path: '/',
            component: Home
        },
        {
            path: '/mention-legal',
            name: 'mention-legal',
            component: MentionLegal
        },
        {
            path: '/entreprise',
            name: 'entreprise',
            component: Entreprise
        },
        {
            path: '/goodies',
            name: 'goodies',
            component: Goodies,
        },
        {
            path: '/calendrier',
            name: 'produits2',
            component: Produits
        },
        {
            path: '/memorie',
            name: 'produits4',
            component: Produits
        },
        {
            path: '/mugs',
            name: 'produits3',
            component: Produits
        },
        {
            path: '/cadrephoto',
            name: 'produits5',
            component: Produits
        },
        {

            path: '/compte',
            name: 'compte',
            component: Compte,

        },
        {

            path: '/album',
            name: 'album',
            component: Produits
        },
        {
            path: '/faq-contact',
            name: 'faq-contact',
            component: FaqContact
        },
        {
            path: '/image-ordinateur',
            name: 'image-ordinateur',
            component: ImageOrdinateur
        },
        {
            path: '/connexion',
            name: 'login',
            component: Login,

        },
        {
            path: '/inscription',
            name: 'register',
            component: Register,

        },
        {
            path: '/profile-modif',
            name: 'profile-modif',
            component: Profile
        },
        {
            path: '/panier',
            name: 'panier',
            component: Panier
        },
        {
            path: '/creation-mugs',
            name: 'creatiomugs',
            component: CreationMugs
        },
        {
            path: '/creation-cadrephoto',
            name: 'creatiocadrephoto',
            component: CreationCadrePhoto
        },
        {
            path: '/creation-calendrier',
            name: 'creation calendrier',
            component: CreationCalendrier
        },
        {
            path: '/creation-memorie',
            name: 'creation memorie',
            component: CreationMemorie
        },
        {
            path: '/creation-album',
            name: 'creation album',
            component: CreationAlbum
        },
        {
            path:"*",
            name:"404*",
            component: Error
        }

    ]
})
new Vue({
    router,
    render: h => h(App)
}).$mount('#app')

