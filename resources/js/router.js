import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Home from './VueFront/Home.vue'
import MentionLegal from './VueFront/MentionLegal.vue'
import Entreprise from './VueFront/Entreprise.vue'
import Goodies from './VueFront/Goodies.vue'
import Produits from './VueFront/Produits.vue'
import Compte from './VueFront/Compte.vue'
import FaqContact from './VueFront/FaqContact.vue'
import Login from './VueFront/Login.vue'
import Register from './VueFront/Register.vue'
import Profile from './VueFront/Profil.vue'
import Panier from './VueFront/Panier.vue'
import CreationMugs from './VueFront/CreationMugs.vue'
import CreationUsb from './VueFront/CreationUsb.vue'
import CreationCadrePhoto from './VueFront/CreationCadrePhoto.vue'
import CreationCalendrier from './VueFront/CreationCalendrier.vue'
import CreationAlbum from './VueFront/CreationAlbum.vue'
import HomeAdmin from './Admin/HomeAdmin.vue'
import FaqsAdmin from './Admin/FaqsAdmin.vue'
import FaqsModif from './Admin/FaqsModif.vue'
import FaqsNew from './Admin/FaqsNews.vue'
import ProduitsAdmin from './Admin/ProduitsAdmin.vue'
import ProduitsNew from './Admin/ProduitsNews.vue'
import UserAdmin from './Admin/UserAdmin.vue'
import UserNew from './Admin/UsersNews.vue'
import OrderAdmin from './Admin/OrderAdmin.vue'
import Error from './VueFront/Error.vue'

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
            component: MentionLegal,
        },
        {
            path: '/entreprise',
            name: 'entreprise',
            component: Entreprise,
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
            path: '/cle-usb',
            name: 'produits6',
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
            path: '/login',
            name: 'login',
            component: Login,

        },
        {
            path: '/register',
            name: 'register',
            component: Register,

        },
        {
            path: '/profile-modif',
            name: 'profile-modif',
            component: Profile,
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
            path: '/creation-usb',
            name: 'creationusb',
            component: CreationUsb
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
            path: '/creation-album',
            name: 'creation album',
            component: CreationAlbum
        },
        {
            path: '/administration',
            name: 'administration home',
            component:  HomeAdmin
        },

        {
            path: '/admin-faqs',
            name: 'administration fads',
            component:  FaqsAdmin
        },
        {
            path: '/faqs-modif/1',
            name: 'faqs modif',
            component:  FaqsModif
        },
        {
            path: '/faqs-new',
            name: 'faqs news',
            component:  FaqsNew
        },
        {
            path: '/admin-produit',
            name: 'admin produits',
            component:  ProduitsAdmin
        },
        {
            path: '/produits-new',
            name: 'new produits',
            component:  ProduitsNew
        },
        {
            path: '/admin-user',
            name: 'admin user',
            component:  UserAdmin
        },
        {
            path: '/users-new',
            name: 'new user',
            component:  UserNew
        },
        {
            path: '/admin-order',
            name: 'admin order',
            component:  OrderAdmin
        },
        {
            path:"*",
            name:"404*",
            component: Error
        }


    ]
})

export default router
