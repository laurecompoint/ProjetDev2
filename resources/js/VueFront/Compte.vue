<template>
    <div class="background text-justify">
        <h1 class="text-center mt-4">Mon compte</h1>
        <div class="line mt-4"></div>
        <b-row align-h="between" class="mt-3 pb-5" >
            <div class="info" cols="5">
                <h3 class="mt-5">Information</h3>
                <p class="mt-5"><strong>Nom : </strong> {{user().lastname}} </p>
                <p><strong>Prénom : </strong> {{user().firstname}} </p>
                <p><strong>Adresse :  </strong>{{user().adresse}} </p>
                <p><strong>Mail : </strong> {{user().email}}</p>
                <p><strong>Numéro de téléphone : </strong>{{user().tel}} </p>
                <router-link  class="btn button-compte" to="/profile-modif">Modifier vos info</router-link>
            </div>
            <b-col cols="4" class="user"> <p CLASS="text-center mt-5"><font-awesome-icon icon="user" style="font-size:200px; color: #3C618C" /></p></b-col>
        </b-row>
        <b-row align-v="start" class="pb-3 responsive-margin mt-5">
            <h3 v-b-toggle.collapse-1 class="mt-5 info">Historique de commande</h3>
            <font-awesome-icon v-b-toggle.collapse-1 icon="angle-down" class="icon mt-5 ml-3" style="font-size:40px; color: #3C618C" />
        </b-row>

        <b-collapse id="collapse-1" cols="8" class="" align-self="center">
            <b-row  class="row text-center">
                <p cols="6" class="history"><strong >Nom : </strong></p>
                <p cols="6" class="ml-5"><strong>Status : </strong></p>
            </b-row>
        </b-collapse>

        <b-row align-v="start" class="responsive-margin">
            <h3 v-b-toggle.collapse-2 class="mt-5 info">Avantage cadeaux</h3>
            <font-awesome-icon v-b-toggle.accordion-3 icon="angle-down" class="icon mt-5 ml-3" style="font-size:40px; color: #3C618C" />
        </b-row>
        <b-collapse id="accordion-3" cols="8" class="contact mt-3" align-self="center">
            <b-row  class="row">
                <p CLASS="info w-75 pb-5">Avitae voluptate voluptatibus? Ab dolorem laboriosam libero natus provident quasi qui quis sequi tenetur voluptatibus?
                    Ab dolorem laboriosam libero natus provident quasi qui quis sequi tenetur voluptatibus?
                </p>
            </b-row>
        </b-collapse>


    </div>



</template>

<script>
    import {mapActions} from 'vuex'
    import {mapGetters} from 'vuex'
    export default {
        name: "Compte",
        created () {
            window.scrollTo(0,0);
        },
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

        }
    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .button-compte, :hover .button-compte{
        background-color: #6C8EAD;
        margin-top: 10px;
        border-radius: 7px;
        border: none;
        height: 40px;
        color: white;
    }
    .info{
        padding-left: 145px;
    }
    .title{
        padding-left: 90px;
    }
    .history{
        margin-left: 168px;
    }
    .background{
        min-height: 900px;
    }
    @media (max-width: $responsive-mobile) {
        .user{
            display: none;
        }
        .info{
            padding-left: 45px;
        }
        .row{
            margin-right: 0px;
        }
    }
    @media (max-width: $responsive-tablet) {
        .row{
            margin-right: 0px;
        }
    }
</style>