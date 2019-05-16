<template>
    <div class="background text-justify">

        <h1 class="text-center mt-4">Modifier vos info</h1>
        <div class="line mt-4"></div>
        <b-row align-h="between" class="mt-3 pb-5" v-bind:key="user.id">
            <div class="info" cols="6">
                <h3 class="mt-5">Information</h3>
                <label  class="mt-5 email">Nom</label>
                <b-form-input type="test" v-bind:placeholder="user.lastname"></b-form-input>
                <label  class="mt-3 email">Prénom</label>
                <b-form-input type="text" v-bind:placeholder="user.firstname"></b-form-input>
                <label  class="mt-3 email">Email</label>
                <b-form-input type="email" v-bind:placeholder="user.email"></b-form-input>
                <label  class="mt-3 email">Adresse</label>
                <b-form-input type="text" v-bind:placeholder="user.adresse"></b-form-input>
                <label  class="mt-3 email">Numéro téléphone</label>
                <b-form-input type="nombre" v-bind:placeholder="user.tel"></b-form-input>
                <label  class="mt-3">Mot de passe</label>
                <b-form-input type="password" v-bind:placeholder="user.password"></b-form-input>
                <b-button class="mt-3 mb-5 button-compte">Modifier</b-button>
            </div>

            <b-col cols="4" class="block-image"> <p CLASS="text-center mt-5"><font-awesome-icon icon="user" style="font-size:200px; color: #3C618C" /></p></b-col>
        </b-row>
    </div>
</template>

<script>
    export default {
        name: "Profil",
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                user: [],
            }
        },
        mounted () {
            axios.get(`${this.api}profil-modif`)
                .then(res => this.user = res.data)
                .catch(err => console.log(err))

        }
    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .info{
        padding-left: 105px;
    }
    .button-compte{
        background-color: #6C8EAD;
        border-radius: 10px;
        border: none;
    }
    .form-control{
        width: 350%;
        border-radius: 0px;
        border: Solid #6C8EAD 3px;
    }
    @media (max-width: $responsive-mobile) {
        .form-control{
            width: 150%;
        }
        .info{
            padding-left: 70px;
        }
        .block-image{
            display: none;
        }
        .row{
            margin-right: 0px;
        }
    }
    @media (max-width: $responsive-tablet) {
        .form-control{
            width: 140%;
        }
        .row{
            margin-right: 0px;
        }
    }
</style>