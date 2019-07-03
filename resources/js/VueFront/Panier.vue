<template>
    <div  class="background">
        <b-row align-h="center">
            <h1 class="text-center mt-4"> {{empty}}</h1>
            <p class="mt-4 pl-3 text-center"><font-awesome-icon icon="shopping-basket"  style="font-size:40px; color: #6C8EAD;" /></p>
        </b-row>
        <div class="line mt-4"></div>
        <b-container class="bv-example-row">
            <b-row align-h="between">
                <b-col cols="10" md="6" class="panier">
                    <h3 class="mt-5">Vos produits :</h3>
                    <div class="produit-list pb-5" id="produit-vide" v-for="order in orders" v-bind:key="order.id">
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
                                    <p class="mt-3 ml-2" >{{order.price}}€</p>
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
                    <h3 class="mt-5">Récap paiement</h3>
                    <div class="bg-white livraison">
                        <b-row align-h="between" class="mt-4 ml-2">
                            <b-col cols="6" md="6" class=""><h6>Sous total :   </h6></b-col>
                            <b-col cols="6" md="5"><h5> {{somme}}€</h5></b-col>
                        </b-row>
                        <b-row align-h="between" class="mt-2 ml-2">
                            <b-col cols="6" md="6" class=""><h6>Livraison :</h6></b-col>
                            <b-col cols="6" md="5"><h5>5 €</h5></b-col>
                        </b-row>
                        <b-row align-h="between" class="mt-2 ml-2">
                            <b-col cols="6" md="6" class=""><h6>Prix Total :</h6></b-col>
                            <b-col cols="6" md="5"><h5>{{somme + 5 }}€</h5></b-col>
                            <h5 style="display:none">{{total }}€</h5>
                        </b-row>
                        <b-button @click="checkout" class="mb-5 mt-2 ml-4 button-panier">Valider le panier</b-button>
                    </div>
                </b-col>
            </b-row>
        </b-container>

        <div class="stripe-paiment">
            <div>
                <vue-stripe-checkout
                        ref="checkoutRef"
                        locale="fr"
                        :image="image"
                        :shipping-address="address"
                        :name="name"
                        :description="description"
                        :currency="currency"
                        :amount="amount"
                        :allow-remember-me="false"
                        @done="done"
                ></vue-stripe-checkout>

            </div>

        </div>

    </div>
</template>

<script>
    export default {
        name: "Panier",
        data() {
            return {
                orders: [],
                somme: '',
                empty: '',
                image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                name: 'Paiement Creative Picture',
                description: 'Entree vos information de paiement',
                currency: 'currency',
                stripeToken: 'nothing',
                address: 'adresse',
                amount:  0,

            }
        },

        mounted () {
            axios.get('/panieruser')
                .then((res) => {
                    this.orders = res.data
                    if(res.data.length == '' ){
                        this.empty = `Votre panier est vide`
                        console.log('empty')
                    }
                    else{
                        this.empty =  `Panier`

                        console.log('Notempty')
                    }

                })
                .catch(err => console.log(err))

            axios.get(`/paniersomme`)
                .then(res => this.somme = res.data)
                .catch(err => console.log(err))

        },
        computed:{

            total(){
                let $total = this.somme + 5;
                this.amount = $total * 100
                return this.amount
            },

        },

        methods:{
            async checkout () {
                if(this.amount !== null){
                    const { token, args } = await this.$refs.checkoutRef.open();
                    callStripe(this.stripeToken, this.amount);
                    function callStripe(token, montant) {
                        const request = require('request');
                        let data = 'amount='+ montant+ '&currency=eur&description=Paiment&source='+token;
                        //secret key (stripe)
                        let headers = {
                            'Authorization': 'Bearer sk_test_PJRgUiiJktt9fkx66Q5inqtM'
                        };
                        let options = {
                            url: 'https://api.stripe.com/v1/charges',
                            headers: headers,
                            method: 'POST',
                            body: data
                        };
                        function callback(error) {
                            if (!error ) {
                                alert("Votre paiement a été pris en compte")
                            }
                            else{
                                alert("ERROR : le paiement n'as pas été valider")
                            }
                        }
                        request(options, callback);
                    }
                }
            },
            done(token) {
                this.stripeToken = token.token.id;
            },
            paniervide(){

            },
            orderdelete(id) {
                    axios.post(`/order-delete/${id}`)
                        .then(res => {
                            window.location = '/panier'
                            //this.$router.push('/panier')
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
        .livraison{
            height: 250px;
        }

    }
</style>