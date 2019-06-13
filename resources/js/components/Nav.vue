<template>
    <b-navbar  toggleable="lg"  type="dark" id="nav" >
        <b-navbar-brand> <router-link to="/"><img  src="../../../public/img/logo.png" class=" logo"></router-link></b-navbar-brand>
        <b-navbar-toggle target="nav_collapse" />
        <b-collapse is-nav id="nav_collapse">
            <b-navbar-nav class="ml-auto">
                <router-link  to="/goodies">Goodies</router-link>
                <div class="" v-if="OnUser()">
                    <b-dropdown size="lg"  variant="link" toggle-class="text-decoration-none" no-caret>
                        <template slot="button-content"><font-awesome-icon icon="user" style="font-size:30px; color: white" /></template>
                        <router-link class="text-dark" to="/compte">Mon Espace : {{this.user().firstname}} </router-link>
                        <p></p>
                        <div class="text-center">
                            <a class="buttonlogout"  @click="Onlogout()">Deconexion</a>
                        </div>
                    </b-dropdown>
                </div>
                <DIV class="mt-3" v-else>
                    <router-link  to="/login">Connexion</router-link>
                    <router-link to="/register" >Inscription</router-link>
                </DIV>
                <router-link to="/panier">Panier <font-awesome-icon icon="shopping-basket"  style="font-size:20px; color: WHITE;" /></router-link>
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</template>

<script>
    import {mapActions} from 'vuex'
    import {mapGetters} from 'vuex'
    export default {
        name: "Nav",
        data() {
            return {

            }
        },
        mounted(){

        },
        methods : {
            ...mapActions([
                'logout',
                'setUser'
            ]),
            ...mapGetters([
                'user',

            ]),
            Onlogout () {
                this.logout()
            },
            OnUser(){
                return this.user()
            },



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
        background-color:  #6C8EAD;
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
        .buttonlogout{
            color: #6C8EAD;
            cursor: pointer;
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