<template>
    <div class="">

        <b-row class="creation" align-h="around">
            <b-col cols="9" md="3" class="text-center">
                <NavAdmin></NavAdmin>
            </b-col>
            <b-col cols="9" md="9" class="text-center">
                <router-link to="/administration"><h1 class="text-center mt-4">Administration : Oders </h1></router-link>
                <table>
                    <tr class="headtable">
                        <th class="text-white">Id</th>
                        <th class="text-white">Nom</th>
                        <th class="text-white">Action</th>
                    </tr>
                    <tr v-for="order in orders" v-bind:key="order.id" class="mt-5 bg-white">
                        <td class="mt-5">{{ order.id }}</td>
                        <td>{{ order.name }}</td>
                        <td>
                            <b-button-group>
                                <form @submit.prevent="orderdelete(order.id)" method="POST">
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
                orders: [


                ]
            }
        },
        mounted () {
            axios.get(`${this.api}admin-order`)
                .then(res => this.orders = res.data)
                .catch(err => console.log(err))

        },
        methods : {
            orderdelete(id) {
                axios.post(`${this.api}admin-order/${id}`)
                    .then(res => {
                        window.location = '/admin-order'

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

</style>