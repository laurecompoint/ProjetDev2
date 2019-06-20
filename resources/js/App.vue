<template>
    <div id="app">
        <div>
            <Nav ></Nav>
            <router-view />
            <Footer/>
        </div>
    </div>
</template>

<script>
    import Footer from './components/Footer'
    import Nav from './components/Nav'
    import {mapActions} from 'vuex'

    export default {
        components:{
            Footer,
            Nav,
        },
        methods: {
            ...mapActions([
                'setUser',

            ])
        },
        created () {
            this.setUser()
        }
    }

</script>
<style scoped lang="scss">
    #app{
        background-image: url("../../public/img/fondbackground.png");
        background-size: 1500px;
    }


    @font-face {
        font-family: "Monad";
        src: url('../../public/fonts/monad/Monad.otf');
    }
    @font-face {
        font-family: "Gravity";
        src: url('../../public/fonts/gravity/Gravity-Regular.otf');
    }

</style>
