<template>
    <b-navbar  toggleable="lg"  type="dark" id="nav" >
        <b-navbar-brand> <router-link to="/"><img  src="../../../public/img/logo.png" class=" logo"></router-link></b-navbar-brand>
        <b-navbar-toggle target="nav_collapse" />
        <b-collapse is-nav id="nav_collapse">
            <b-navbar-nav class="ml-auto">
                <router-link to="/album">Album</router-link>
                <router-link to="/goodies">Goodies</router-link>
                <router-link to="/panier">Panier</router-link>
                <router-link  to="/connexion">Connexion</router-link>
                <router-link to="/inscription">Inscription</router-link>
                <div v-bind:if="check()">
                    <b-dropdown size="lg"  variant="link" toggle-class="text-decoration-none" no-caret>
                        <template slot="button-content"><font-awesome-icon icon="user" style="font-size:30px; color: white" /></template>
                        <router-link class="text-dark" to="/compte">Mon Espace</router-link>
                        <div class="text-center">
                            <b-button class="text-white bg-danger"  @click="logout()">Deconexion</b-button>
                        </div>
                    </b-dropdown>
                </div>

            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</template>

<script>
    export default {
        name: "Nav",
        data() {
            return {
                user: []
            }
        },
        methods : {
            logout () {
                axios.post('/logout')
                    .then(res => {
                        document.location.href = "/";
                    })
                    .catch(err => {
                        console.log(err.response)
                    })
            },
            check(){


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
            margin-top: 17px;


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