<template>
    <div >
    <b-navbar  toggleable="lg"  type="dark" id="nav">
        <b-navbar-brand> <router-link to="/"><img  src="img/logo.png" class=" logo"></router-link></b-navbar-brand>
            <b-navbar-nav class="ml-auto">
                <input type="checkbox" class="trigger">
                <div class="burger">
                    <div></div>
                    <div></div>
                </div>
                <nav class="nav">
                    <ul class="navbar-nav">
                <router-link  to="/goodies">Goodies</router-link>
                <div class="" v-if="OnUser()">
                    <b-dropdown size="lg"  variant="link" toggle-class="text-decoration-none" no-caret>
                        <template slot="button-content"><font-awesome-icon icon="user" style="font-size:30px; color: white" /></template>
                        <router-link class="text-dark"  to="/compte"><h6 class="text-center">Mon Espace : {{user().firstname}}</h6> </router-link>
                        <img v-bind:src="user().avatar" class="w-25 ml-5" />
                        <div class="text-center">
                            <a class="buttonlogout"  @click="Onlogout()">Deconexion</a>
                        </div>
                    </b-dropdown>
                </div>
                        <div class="mt-3" v-else>
                            <router-link  to="/login">Connexion</router-link>
                            <router-link to="/register" >Inscription</router-link>
                        </div>
                <router-link to="/panier">Panier <font-awesome-icon icon="shopping-basket"  style="font-size:20px; color: WHITE;" /></router-link>
                    </ul>
                </nav>
            </b-navbar-nav>

    </b-navbar>
        <div>


        </div>
    </div>
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



        },
        mounted(){
            console.log(this.user.id)
        },
    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    $blue : #6C8EAD;
    $white: white;
    #app{
        font-family: 'Gravity';
        /*
        .navbar-dark .navbar-toggler{
            border: none;
        }
        button:focus{
            outline: none;
        }
        */
        .trigger{
            display: none;
        }
        #nav {
            padding: 1% 5%;
            background-color:  #6C8EAD;
            .logo{
                height: 70px;
            }
            a {
                text-decoration: none;
                color: $white;
                margin: 0 15px;
                font-size: 12pt;
                margin-top: 17px;
            }
            .buttonlogout{
                color:  $blue;
                cursor: pointer;
            }
        }
        @media screen and (min-width: $responsive-mobile) and (max-width: $responsive-tablet) {
            .burger > div{
                width: 36px;
                height: 6px;
                background: #000;
                margin-bottom: 5px;
                border-radius: 3px;
                transition: transform 0.5s ease-out,
                opacity 1s ease-in,
                background 0.25s ease-out;
                animation: burger 0.25s steps(1, end);
            }
            .burger, .trigger{
                position: absolute;
                color: #000;
                margin: 0;
                top: 30px;
                right: 30px;
            }
            .trigger{
                display: inline-block;
                z-index: 3;
                width: 36px;
                height: 28px;
                opacity: 0;
                cursor: pointer;

            }
            .burger{ z-index: 2;}
            .trigger:checked + .burger > :nth-child(1){
                transform: translateY(0px) rotate(45deg);
            }
            .trigger:checked + .burger > :nth-child(2){
                transform: translateY(-11px) rotate(-45deg);
            }
            .trigger:checked + .burger > div{
                background: #000;
            }
            .trigger:checked + .burger, .trigger:checked{
                position: fixed;
            }
            .burger > :last-child{
                margin-block-end: 0;
            }
        .nav {
                background:  #6C8EAD;
                opacity: 0.9;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                z-index: 1;
                transform: translate(100%);
                transition: transform 0.5s ease-in-out;
                animation: nav 0.5s steps(1, end);
            }
            .trigger:checked ~ nav {
                transform: translate(0);
            }

        }
    }
</style>