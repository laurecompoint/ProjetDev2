<template>
<div class="background">
    <h1 class="text-center mt-4">Inscription</h1>
    <div class="line mt-4"></div>
    <div class="register m-auto">
        <form  @submit.prevent="Onregister">
        <b-row align-h="center"  class="mt-5">
            <b-col cols="6">
                <label  class="mt-3">Nom</label>
                <small v-if="errors.lastname">
                    <p class="text-danger" v-for="Error in errors.lastname">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="text" placeholder="Nom"  v-model="auth.lastname"></b-form-input>

            </b-col>
            <b-col cols="6">
                <label class="mt-3">Prénom</label>
                <small v-if="errors.firstname">
                    <p class="text-danger" v-for="Error in errors.firstname">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="text" placeholder="Prénom" v-model="auth.firstname"></b-form-input>

            </b-col>
        </b-row>

            <label  class="mt-3">Email</label>
            <small v-if="errors.email">
                <p class="text-danger" v-for="Error in errors.email">
                    {{ Error }}
                </p>
            </small>
            <b-form-input type="email" placeholder="Email" v-model="auth.email"></b-form-input>

            <label class="mt-3">Adresse</label>
            <small v-if="errors.adresse">
                <p class="text-danger" v-for="Error in errors.adresse">
                    {{ Error }}
                </p>
            </small>
            <b-form-input type="text" placeholder="Adresse" v-model="auth.adresse"></b-form-input>
            <label class="mt-3">Numéro de téléphone</label>
            <small v-if="errors.tel">
                <p class="text-danger" v-for="Error in errors.tel">
                    {{ Error }}
                </p>
            </small>
            <b-form-input type="number" placeholder="Numéro de téléphone" maxlength="10" v-model="auth.tel"></b-form-input>
            <label class="mt-3">Mot de passe</label>
            <small v-if="errors.password">
                <p class="text-danger" v-for="Error in errors.password">
                    {{ Error }}
                </p>
            </small>
            <b-form-input type="password"  placeholder="Mot de passe" v-model="auth.password"></b-form-input>
            <label class="mt-3">Confirmation mot de passe</label>
            <div v-if="confirmpassword()">
                <small class="text-danger">Le mot de passe ne correspond pas</small>
            </div>
            <b-form-input type="password" placeholder="Confirmation du mot de passe" v-model="auth.confirmPassword"></b-form-input>
            <div class="button-valider">
                <b-button type="submit"  class="mt-4 button-login-register">Valider</b-button>
            </div>
        </form>
    </div>
</div>
</template>
<script>
    import {mapActions} from 'vuex'
    export default {
        name: "Register",
        data() {
            return {
                auth:{
                    lastname: '',
                    firstname: '',
                    email: '',
                    adresse: '',
                    tel: '',
                    password: '',
                    confirmPassword: '',
                },
                errors: {

                }
            }
        },
        methods : {
            ...mapActions([
                'register',
                'setUser'
            ]),
            Onregister() {
                this.register(this.auth)
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
    .register{
        width: 600px;
        min-height: 820px;
    }
    input{
        width: 100%;
        border-radius: 0px;
        border: Solid #6C8EAD 3px;
    }
    .button-login-register{
        float: right;
        background-color: #3D628D;
        border-radius: 10px;
        border: none;
        width: 130px;
        height: 40px;
    }
    @media (max-width: $responsive-mobile) {
        .register{
            width: 300px;
        }
    }


</style>