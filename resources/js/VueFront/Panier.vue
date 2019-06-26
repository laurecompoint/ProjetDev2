<template>
    <div  class="background">
        <h1 class="text-center mt-4">Panier</h1>
        <div class="line mt-4"></div>
        <div class="" v-if="paniervide()">
            <h3 class="mt-5 text-center">Votre panier est vide</h3>
            <p class="pb-5 mt-5 text-center"><font-awesome-icon icon="shopping-basket"  style="font-size:200px; color: #6C8EAD;" /></p>

        </div>
        <b-container class="bv-example-row">
            <b-row align-h="between">
                <b-col cols="10" md="6" class="panier">
                    <h3 class="mt-5">Vos produits :</h3>

                    <div class="produit-list pb-5" v-for="order in orders" v-bind:key="order.id">

                        <b-row align-h="between">
                            <b-col cols="10" md="6" class="">
                                <b-row no-gutters class="mt-5" align-v="center">
                                    <strong cols="5" >Nom :</strong>
                                    <p class="mt-3 ml-2"> {{order.name}}</p>
                                </b-row>
                                <b-row no-gutters align-v="center">
                                    <strong cols="5" class="">Quantité :</strong>
                                    <p class="mt-3 ml-2">1</p>
                                </b-row>
                                <b-row no-gutters align-v="center">
                                    <strong cols="5" class="">Prix :</strong>
                                    <p class="mt-3 ml-2" >{{order.price}}</p>
                                </b-row>
                            </b-col>
                            <b-col cols="1" md="6" class="">
                                <form @submit.prevent="orderdelete(order.id)" method="POST">
                                    <button class="btn mt-5" type="submit"><font-awesome-icon icon="times" style="font-size:20px; color: #3C618C" /></button>
                                </form>
                            </b-col>
                        </b-row>

                    </div>
                </b-col>
                <b-col cols="6" md="4" class="recap">
                    <h3 class="mt-5">Recap paiment</h3>
                    <div class="bg-white livraison">
                        <b-row align-h="between" class="mt-4 ml-2">
                            <b-col cols="6" md="6" class=""><h6>Sous total :   </h6></b-col>
                            <b-col cols="6" md="5"><h5>{{soustotale()}} €</h5></b-col>
                        </b-row>
                        <b-row align-h="between" class="mt-2 ml-2">
                            <b-col cols="6" md="6" class=""><h6>L'ivraison :</h6></b-col>
                            <b-col cols="6" md="5"><h5>5 €</h5></b-col>
                        </b-row>
                        <b-row align-h="between" class="mt-2 ml-2">
                            <b-col cols="6" md="6" class=""><h6>Prix Total :</h6></b-col>
                            <b-col cols="6" md="5"><h5 v-model="total">{{ addition()}}  €</h5></b-col>
                        </b-row>
                        <b-button class="mb-5 mt-2 ml-4 button-panier">Valider le panier</b-button>
                    </div>
                </b-col>
            </b-row>
        </b-container>


    </div>
</template>

<script>
    export default {
        name: "Panier",
        data() {
            return {
                orders: [],
                soustotal: 0,
                livraison: 5

            }
        },
        mounted () {
            axios.get('/panieruser')
                .then(res => this.orders = res.data)
                .catch(err => console.log(err))


        },

        methods:{
            paniervide(){

            },
            addition(){
                if(this.soustotal > 0){
                    return this.soustotal + this.livraison;
                }
            },
            soustotale(){

                    return this.soustotal = this.orders[0].price

            },
            paniervide(){

            },
            orderdelete(id) {
                    axios.post(`/order-delete/${id}`)
                        .then(res => {
                            window.location = '/panier'

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
    .recap{
        position: fixed;
        top: 220px;
        left: 900px;
    }
    .livraison{
        height: 200px;
        border-radius: 10px ;
        border: solid #6C8EAD;

    }
    .total{
        border-radius: 10px ;
        border: solid #6C8EAD;
    }
    .input{
        margin-left: 70px;
    }
    h3{
        color: #3D628D;
    }
    h6{
        color: #6C8EAD;
    }
    .produit-list{
        line-height: 0.1rem;
        background-background: white;
        background-size: 380px;
        width: 70%;


    }
    .panier{
        min-height: 400px;
    }
    .button-panier{
        background-color: #3C618C;
        border: none;
        height: 40px;
        border-radius: 10px;
        margin: auto;
    }

    @media (max-width: $responsive-tablet) {
        .recap{
            position: fixed;
            top: 220px;
            left: 500px;
        }

    }
    @media (max-width: $responsive-mobile) {
        .recap{
            position: absolute;
            top: 220px;
            left: 220px;
        }

    }
</style>