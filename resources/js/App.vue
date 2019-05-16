<template>
    <div id="app">
        <div>
            <Nav></Nav>
            <router-view/>
            <Footer/>
        </div>
    </div>
</template>

<script>
    import Footer from './components/Footer'
    import Nav from './components/Nav'

    export default {
        components:{
            Footer,
            Nav,
        }
    }

</script>
<style scoped lang="scss">

    @font-face {
        font-family: "Monad";
        src: url('../assets/fonts/monad/Monad.otf');
    }
    @font-face {
        font-family: "Gravity";
        src: url('../assets/fonts/gravity/Gravity-Regular.otf');
    }

</style>
