<template>
    <b-navbar  toggleable="lg"  type="dark" id="nav" >
        <b-navbar-brand> <router-link to="/"><img  src="../../../public/img/logo.png" class=" logo"></router-link></b-navbar-brand>

        <b-navbar-toggle target="nav_collapse" />
        <b-collapse is-nav id="nav_collapse">

            <b-navbar-nav class="ml-auto">
                <router-link to="/album">Album</router-link>
                <router-link to="/goodies">Goodies</router-link>
                <router-link to="/panier">Panier</router-link>
                <router-link to="/login">Connexion</router-link>
                <router-link to="/register">Inscription</router-link>

            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</template>

<script>
    export default {
        name: "Nav",
        methods : {
            logout () {
                axios.post('/logout')
                    .then(res => {
                        document.location.href = "/login";
                    })
                    .catch(err => {
                        console.log(err.response)
                    })
            }
        }
    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    $blue : #6C8EAD;
    $white: white;
    #app{
        font-family: 'Gravity';
        .navbar-dark .navbar-toggler{
            border: none;
        }
        button:focus{
            outline: none;
        }
    #nav {
        padding: 1% 5%;
        background-color: $blue;

        .logo{
            height: 70px;
        }
        a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-size: 12pt;


        }
    }

        @media (max-width: $responsive-tablet) {
            background-size: 800px;
        }
        @media (max-width: $responsive-mobile) {
            background-size: 500px;
        }
    }
</style>