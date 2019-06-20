<template>
    <div class="">
        <b-row class="creation" align-h="around">
            <b-col cols="9" md="3" class="text-center">
                <NavAdmin></NavAdmin>
            </b-col>
            <b-col cols="9" md="9" class="text-center">
                <h1 class="text-center mt-4">Administration : User    <router-link to="/users-new"><font-awesome-icon icon="plus-circle" style="font-size:40px; color: #3C618C; cursor: pointer" /></router-link></h1>

                <table>
                    <tr class="headtable">
                        <th class="text-white">Id</th>
                        <th class="text-white">Prénom</th>
                        <th class="text-white">Action</th>
                    </tr>
                    <tr v-for="user in users" v-bind:key="user.id" class="mt-5 bg-white">
                        <td class="mt-5 ">{{ user.id }}</td>
                        <td>{{ user.firstname }}</td>
                        <td>
                            <b-button-group>
                                <router-link to="/users-modif"><font-awesome-icon class="mr-3" icon="pencil-alt" style="font-size:20px; color: #3C618C; cursor: pointer" /></router-link>
                                <form @submit.prevent="userdelete(user.id)" method="POST">
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
                users: []
            }
        },
        mounted () {
            axios.get(`/user-admin`)
                .then(res => this.users = res.data)
                .catch(err => console.log(err))

        },
        methods : {
            userdelete(id) {
                axios.post(`/user-admin/${id}`)
                    .then(res => {
                        window.location = '/admin-user'})
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
    button{
        border: none;
    }
</style>