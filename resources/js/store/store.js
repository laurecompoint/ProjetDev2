import Vue from 'vue'
import Vuex from 'vuex'

import user from './index'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        user: user,

    }
})