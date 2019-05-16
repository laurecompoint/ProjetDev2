<template>
<div class="background">
    <h1 class="text-center mt-4">Inscription</h1>
    <div class="line mt-4"></div>
    <div class="login m-auto">
        <form methode="post" @submit.prevent="register">
        <b-row align-h="center"  class="mt-5">
            <b-col cols="6">
                <label>Nom</label>
                <small v-if="errors.lastname">
                    <p class="m-1 text-danger">
                        Veuillez saisir votre Nom
                    </p>
                </small>
                <b-form-input type="text" placeholder="Nom"  v-model="auth.lastname"></b-form-input>

            </b-col>
            <b-col cols="6">
                <label>Prénom</label>
                <small v-if="errors.firstname">
                    <p class="m-1 text-danger">
                        Veuillez saisir votre Prénom
                    </p>
                </small>
                <b-form-input type="text" placeholder="Prénom" v-model="auth.firstname"></b-form-input>

            </b-col>
        </b-row>

            <label  class="mt-3">Email</label>
            <small v-if="errors.email">
                <p class="m-1 text-danger">
                    Veuillez saisir votre Mail
                </p>
            </small>
            <b-form-input type="email" placeholder="Email" v-model="auth.email"></b-form-input>


            <label class="mt-3">Adresse</label>
            <small v-if="errors.adresse">
                <p class="m-1 text-danger">
                    Veuillez saisir votre Adresse
                </p>
            </small>
            <b-form-input type="text" placeholder="Adresse" v-model="auth.adresse"></b-form-input>
            <label class="mt-3">Numéro de téléphone</label>
            <small v-if="errors.tel">
                <p class="m-1 text-danger">
                    Veuillez saisir votre Numéro de Téléphone
                </p>
            </small>
            <b-form-input type="text" placeholder="Numéro de téléphone" v-model="auth.tel"></b-form-input>


            <label class="mt-3">Mot de passe</label>
            <small v-if="errors.password">
                <p class="m-1 text-danger">
                    Veuillez saisir votre Mot de passe
                </p>
            </small>
            <b-form-input type="password"  placeholder="Mot de passe" v-model="auth.password"></b-form-input>
            <label class="mt-3">Confirmation mot de passe</label>
            <div v-if="confirmpassword()">
                <small class="text-danger">Le mot de passe ne correspond pas</small>
            </div>
            <b-form-input type="password" placeholder="Confirmation du mot de passe" v-model="auth.confirmPassword"></b-form-input>
            <div class="button-valider">
                <b-button type="submit" class="mt-4 button-login-register">Valider</b-button>
            </div>
        </form>
    </div>
</div>
</template>
<script>
    export default {
        name: "Register",
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                auth:{
                    lastname: '',
                    firstname: '',
                    email: '',
                    adresse: '',
                    tel: '',
                    password: '',
                    confirmPassword: '',
                },
                errors: {}
            }
        },
        methods : {
            register() {
                axios.post(`/register`, this.auth)
                    .then(res => {
                        window.location = '/'
                    })
                    .catch(err => {
                        this.errors = err.response.data.errors
                    })
            },
            error() {
                return this.errors.tel === '' || this.errors.adresse === '' || this.errors.firstname === '' || this.errors.lastname === '' || this.auth.email === '' || this.auth.password === '' || this.auth.confirmPassword === '' || this.confirm()
            },
            confirmpassword () {
                return this.auth.password  !== this.auth.confirmPassword
            }
        }
    }
</script>
<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .login{
        width: 600px;
        min-height: 720px;
    }
    .form-control{
        width: 100%;
        border-radius: 0px;
        border: Solid #6C8EAD 3px;
    }
    .button-login-register{
        float: right;
        background-color: #3D628D;
        border-radius: 10px;
        border: none;
    }
    @media (max-width: $responsive-mobile) {
        .login{
            width: 300px;
        }
    }


</style>