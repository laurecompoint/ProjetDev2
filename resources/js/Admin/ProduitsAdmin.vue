<template>
    <div class="">
        <b-row class="creation" align-h="around">
            <b-col cols="9" md="3" class="text-center">
                <NavAdmin></NavAdmin>
            </b-col>
            <b-col cols="9" md="9" class="text-center">
                <h1 class="text-center mt-4">Administration : Produits <router-link to="/produits-new"><font-awesome-icon icon="plus-circle" style="font-size:40px; color: #3C618C; cursor: pointer" /></router-link></h1>
                <table>
                    <tr class="headtable">
                        <th class="text-white">Id</th>
                        <th class="text-white">Nom du produit</th>
                        <th class="text-white">Action</th>
                    </tr>
                    <tr v-for="produit in produits" v-bind:key="produit.id" class="mt-5 bg-white">
                        <td class="mt-5">{{ produit.id }}</td>
                        <td>{{ produit.name }}</td>
                        <td>
                            <b-button-group>

                                <router-link to="/produits-modif"><font-awesome-icon class="mr-3" icon="pencil-alt" style="font-size:20px; color: #3C618C; cursor: pointer" /></router-link>
                                <form @submit.prevent="produitdelete(produit.id)" method="POST">
                                    <button class="btn btn-outline-danger"  type="submit">  <font-awesome-icon icon="trash" style="font-size:20px; color: #3d628d; cursor: pointer" /></button>
                                </form>

                            </b-button-group>

                        </td>
                    </tr>

                </table>

            </b-col>
        </b-row>
    </div>
</template>

<script>
    import NavAdmin from './NavAdmin.vue'
    export default {
        name: "FagsAdmin",
        components:{
            NavAdmin,
        },
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                produits: [


                ]
            }
        },
        mounted () {
            axios.get(`/produit-admin`)
                .then(res => this.produits = res.data)
                .catch(err => console.log(err))

        },
        methods : {
            produitdelete(id) {
                axios.post(`/produit-admin/${id}`)
                    .then(res => {
                        window.location = '/admin-produit'

                    })
                    .catch(err => {
                        this.errors = err.response.data.errors

                    })
            },
        }
    }
</script>

<style scoped>
    table {

        width: 80%;
        text-align: initial;
        margin-top: 150px;
        margin-bottom: 30px;
        border: 4px solid  #3d628d;
    }
    td{
        width: 50%;
        height: 60px;

    }
    .headtable{
        background-color: #3d628d;
        border-radius: 15px;
        height: 60px;
    }
    button, button:hover{
        border: none;
        text-decoration: none;
    }
</style>