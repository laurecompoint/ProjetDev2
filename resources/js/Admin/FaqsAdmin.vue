<template>
    <div class="">

        <b-row class="creation" align-h="around">
            <b-col cols="9" md="3" class="text-center">
                <NavAdmin></NavAdmin>
            </b-col>
            <b-col cols="9" md="9" class="text-center">
                <router-link to="/administration"><h1 class="text-center mt-4">Administration : Fags <router-link to="/faqs-new"><font-awesome-icon icon="plus-circle" style="font-size:40px; color: #3C618C; cursor: pointer" /></router-link></h1></router-link>
                <table>
                    <tr class="headtable">
                        <th class="text-white">Id</th>
                        <th class="text-white">Catégorie</th>
                        <th class="text-white">Action</th>
                    </tr>
                    <tr v-for="faq in faqs" v-bind:key="faq.id" class="mt-5 bg-white">
                        <td class="mt-5">{{ faq.id }}</td>
                        <td>{{ faq.name }}</td>
                        <td>
                            <b-button-group>

                                <a v-bind:href="faq.id"><font-awesome-icon class="mr-3" icon="pencil-alt" style="font-size:20px; color: #3C618C; cursor: pointer" /></a v-bind:hr>
                                <form @submit.prevent="faqdelete(faq.id)" method="POST">
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
                faqs: []
            }
        },
        mounted () {
               axios.get(`${this.api}admim-faqs`)
                    .then(res => this.faqs = res.data)
                    .catch(err => console.log(err))

        },
        methods : {
            faqdelete(id) {
                axios.post(`${this.api}admim-faq/${id}`)
                    .then(res => {
                        window.location = '/admin-faqs'

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
    table {

        width: 80%;
        text-align: initial;
        margin-top: 150px;
        margin-bottom: 30px;
        border: 4px solid  #3d628d;

    }
    td{
        width: 40%;
        height: 60px;

    }
    .headtable{
        background-color: #3d628d;
        border-radius: 15px;
        height: 60px;
    }
    a{
        text-decoration: none;
    }
    button, button:hover{
        border: none;
        text-decoration: none;
    }
    @media (max-width: $responsive-mobile) {
        table {
            width: 100%;
        }
        .row{
            margin-right: 0px;
        }

    }

</style>