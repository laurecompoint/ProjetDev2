<template>
    <div class="background text-justify">

        <h1 class="text-center mt-4">Ajouter User</h1>
        <div class="line mt-4"></div>
        <b-row align-h="between" class="mt-3 pb-5">
            <form  @submit.prevent="usernew">
                <div class="info" cols="12" md="6">
                <b-row align-h="center"  class="mt-5">
                    <b-col cols="12" md="6">
                        <label  class="mt-3">Nom</label>
                        <small v-if="errors.lastname">
                            <p class="text-danger" v-for="Error in errors.lastname">
                                {{ Error }}
                            </p>
                        </small>
                        <b-form-input type="text" placeholder="Nom"  v-model="users.lastname"></b-form-input>

                    </b-col>
                    <b-col cols="12" md="6">
                        <label class="mt-3">Prénom</label>
                        <small v-if="errors.firstname">
                            <p class="text-danger" v-for="Error in errors.firstname">
                                {{ Error }}
                            </p>
                        </small>
                        <b-form-input type="text" placeholder="Prénom" v-model="users.firstname"></b-form-input>

                    </b-col>
                </b-row>

                <label  class="mt-3">Email</label>
                <small v-if="errors.email">
                    <p class="text-danger" v-for="Error in errors.email">
                        {{ Error }}
                    </p>
                </small>

                    <b-form-input cols="12" type="email" placeholder="Email" v-model="users.email"></b-form-input>
                    <label  class="mt-3">Admin</label>
                    <select v-model="users.admin"  class="custom-select">
                        <option value="1">Admin</option>
                        <option value="0">Pas Admin</option>
                    </select>
                <label class="mt-3">Adresse</label>
                <small v-if="errors.adresse">
                    <p class="text-danger" v-for="Error in errors.adresse">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="text" placeholder="Adresse" v-model="users.adresse"></b-form-input>
                <label class="mt-3">Numéro de téléphone</label>
                <small v-if="errors.tel">
                    <p class="text-danger" v-for="Error in errors.tel">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="number" placeholder="Numéro de téléphone" maxlength="10" v-model="users.tel"></b-form-input>
                <label class="mt-3">Mot de passe</label>
                <small v-if="errors.password">
                    <p class="text-danger" v-for="Error in errors.password">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="password"  placeholder="Mot de passe" v-model="users.password"></b-form-input>

                <div class="button-valider">
                    <button type="submit"  class="mt-4 button-login-register">Valider</button>
                </div>
                </div>
            </form>

            <b-col cols="4" class="block-image"> <p CLASS="text-center mt-5"><font-awesome-icon icon="user" style="font-size:200px; color: #3C618C" /></p></b-col>
        </b-row>
    </div>
</template>

<script>
    export default {
        name: "UsersNews",
        data() {
            return {
                users:{
                    lastname: '',
                    firstname: '',
                    email: '',
                    adresse: '',
                    tel: '',
                    password: '',
                    confirmPassword: '',
                    admin: ''
                },
                errors: {},
            }
        },
        methods : {
            usernew() {
                axios.post(`/new-users`,  this.users)
                    .then(res => {
                        this.$router.push('/admin-user')

                    })
                    .catch(err => {
                        this.errors = err.response.data.errors

                    })
            },
        },
        mounted () {
            console.log(this.users.admin);
        }
    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .info{
        padding-left: 105px;
    }
    .button-login-register{
        background-color: #3D628D;
        border-radius: 10px;
        border: none;
        width: 130px;
        height: 40px;
        color: white;
    }
    .form-control, .custom-select{
        width: 100%;
        border-radius: 0px;
        border: Solid #6C8EAD 3px;
    }
    @media (max-width: $responsive-tablet) {

        .row{
            margin-right: 0px;
        }
        .custom-select{
            width: 100%;
        }
        .block-image{
            display: none;
        }
    }
    @media (max-width: $responsive-mobile) {
        .form-control{
            width: 90%;
        }
        .custom-select{
            width: 90%;
            border-radius: 0px;
            border: Solid #6C8EAD 3px;
        }
        .info{
            padding-left: 40px;
        }
        .block-image{
            display: none;
        }
        .row{
            margin-right: 0px;
        }
    }

</style>