<template>
    <div class="background text-justify">
        <h1 class="text-center pt-4">Modifier vos info</h1>
        <div class="line mt-4"></div>
        <b-row align-h="between" class="mt-3 pb-5">
            <div class="info" cols="6">
                <form method="post" action="" @submit.prevent="profil">
                    <h3 class="mt-5">Information</h3> <br>
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control"  v-model="auth.lastname" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" v-model="auth.firstname" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" v-model="auth.email"  placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" class="form-control" v-model="auth.adresse"  placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input type="text" class="form-control" v-model="auth.tel"  placeholder="">
                    </div>

                    <button class="mt-3 mb-5 button-compte" type="submit">Modifier</button>
                </form>
            </div>
            <b-col cols="4" class="block-image"> <p CLASS="text-center mt-5"><font-awesome-icon icon="user" style="font-size:200px; color: #3C618C" /></p></b-col>
        </b-row>
    </div>
</template>

<script>
    import {mapActions} from 'vuex'
    import {mapGetters} from 'vuex'
    export default {
        name: "Profil",
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                auth: {
                    lastname: '',
                    firstname: '',
                    email: '',
                    adresse: '',
                    tel: '',
                    }
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

            profil() {
                    axios.post(`profile-modif`,  this.auth)
                        .then(res => {
                            this.$router.push('/')

                        })
                        .catch(err => {
                            this.errors = err.response.data.errors

                        })
            },


        }
    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .info{
        padding-left: 105px;
        height: 800px;
    }
    .button-compte{
        background-color: #6C8EAD;
        margin-top: 10px;
        border-radius: 7px;
        border: none;
        height: 40px;
        color: white;
    }
    .form-control{
        width: 300%;
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