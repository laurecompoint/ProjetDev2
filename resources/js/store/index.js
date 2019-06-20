export default{
    state: {
        user: null,
    },
    mutations:{
        SET_USER(state, payload){
            state.user = payload
        },
    },
    actions:{
        login({commit, dispatch}, payload){
            axios.post('/login', payload)
                .then(res =>{
                    dispatch('setUser')
                    window.location = '/'
                })
                .catch(err =>{
                    this.errors = err.response.data.errors
                })
        },
        register({commit, dispatch}, payload){
            axios.post('/register', payload)
                .then(res =>{
                    dispatch('setUser')
                    window.location = '/'
                })
                .catch(err =>{
                    this.errors = err.response.data.errors
                })
        },
        setUser({commit}){
            axios.get('/getUser').then((res) => {
                let user = res.data
                console.log(user.id)
                commit('SET_USER', user)
            })
        },

        logout({commit}){
            axios.post('/logout')
                .then(res => {
                    window.location = '/'
                })
                .catch(err => {
                    console.log(err.response)
                })
            commit('SET_USER', null)
        },
        order({commit, dispatch}, payload){
            axios.post(`/creation-mugs`,  payload)
                .then(res => {
                    //this.$router.push('/panier')
                    window.location = 'panier'
                })
                .catch(err => {
                    this.errors = err.response.data.errors

                })
        },
        orderCadrePhoto({commit, dispatch}, payload){
            axios.post(`/creation-cadrephoto`,  payload)
                .then(res => {
                    //this.$router.push('/panier')
                    window.location = 'panier'
                })
                .catch(err => {
                    this.errors = err.response.data.errors

                })
        },
        orderUsb({commit, dispatch}, payload){
            axios.post(`/creation-usb`,  payload)
                .then(res => {
                    //this.$router.push('/panier')
                    window.location = 'panier'
                })
                .catch(err => {
                    this.errors = err.response.data.errors

                })
        },
        udapteprofil({commit, dispatch}, payload){
            axios.post('/profile-modif', payload)
                .then(res =>{
                    window.location = '/'
                })
                .catch(err =>{
                    this.errors = err.response.data.errors
                })
        },
        faqsnew({commit, dispatch}, payload) {
            axios.post(`/new-faqs`, payload)
                .then(res => {
                    //this.router.push('/admin-faqs')
                    window.location = 'admin-faqs'

                })
                .catch(err => {
                    this.errors = err.response.data.errors

                })
        },
        productnew({commit, dispatch}, payload) {
            axios.post(`/new-produits`,  payload)
                .then(res => {
                    window.location = 'admin-produit'
                    //this.$router.push('/admin-produits')

                })
                .catch(err => {
                    this.errors = err.response.data.errors

                })
        },





    },
    getters: {
        user(state){
            return state.user
        },



    },


}