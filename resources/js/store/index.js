export default{
    state: {
        user: null
    },
    mutations:{
        SET_USER(state, payload){
            state.user = payload
        }
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
        }
    },
    getters: {
        user(state){
            return state.user
        },

    }

}