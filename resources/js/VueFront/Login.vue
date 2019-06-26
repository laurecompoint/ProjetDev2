<template>
    <div class="background">

        <h1 class="text-center mt-4">Connexion</h1>
        <div class="line mt-4"></div>

        <div class="login m-auto">
            <form @submit.prevent="onLogin" class="mt-5">
                <label  class="mt-3">Email</label>
                <small v-if="errors.email">
                    <p class="text-danger" v-for="Error in errors.email">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="email" placeholder="Email" v-model="auth.email"></b-form-input>
                <label class="mt-3">Mot de passe</label>
                <small v-if="errors.password">
                    <p class="text-danger" v-for="Error in errors.password">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="password"  placeholder="Mot de passe" v-model="auth.password"></b-form-input>
                <div class="button-valider">
                    <b-button type="submit"  class="mt-4 button-login-register" >Valider</b-button>
                </div>

            </form>
        </div>

    </div>
</template>
<script>
    import {mapActions} from 'vuex'
    export default {
        name: "Login",
        data() {
            return {
                auth:{
                    email: '',
                    password: '',

                },
                errors: {

                }
            }
        },
        methods : {

            ...mapActions([
                'login',
                'setUser'
            ]),
            onLogin(){
                this.login(this.auth)


            },
        }

    }
</script>
<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .login{
        width: 600px;
        min-height: 350px;
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
        width: 130px;
        height: 40px;
        border: none;
    }
    @media (max-width: $responsive-mobile) {

        .login{
            width: 300px;
        }
    }


</style>