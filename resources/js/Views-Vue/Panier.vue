<template>
    <div  class="background">
        <h1 class="text-center mt-4">Panier</h1>
        <div class="line mt-4"></div>

        <h3 class="mt-5 text-center">Votre panier est vide</h3>
        <p class="pb-5 mt-5 text-center"><font-awesome-icon icon="shopping-basket"  style="font-size:200px; color: #6C8EAD;" /></p>
        <b-container class="bv-example-row">


            <b-row align-h="between">
                <b-col cols="4" md="6" class="">
                    <h3 class="mt-2">Liste des articles</h3>

                    <div class="produit-list">

                        <h6  class="mt-5">Produit 1</h6>
                        <b-row no-gutters align-v="center">
                            <strong cols="5" class="">Nom :</strong>
                            <p class="mt-3 ml-2">Test</p>
                        </b-row>
                        <b-row no-gutters align-v="center">
                            <strong cols="5" class="">Quantité :</strong>
                            <p class="mt-3 ml-2">Test</p>
                        </b-row>
                        <b-row no-gutters align-v="center">
                            <strong cols="5" class="">Nombre de photo :</strong>
                            <p class="mt-3 ml-2">Test</p>
                        </b-row>
                        <b-row no-gutters align-v="center">
                            <strong cols="5" class="">Prix :</strong>
                            <p class="mt-3 ml-2">Test</p>
                        </b-row>

                        <b-button class="mt-4 mb-5 button-panier">Valider le panier</b-button>

                    </div>



                </b-col>


                <b-col cols="6" md="4" class="">

                    <div class="bg-white livraison">
                        <h3 class="text-center mt-2">Mode de l'ivraison</h3>
                        <p class="text-center mt-3"><font-awesome-icon icon="truck"  style="font-size:60px; color: #3C618C" /></p>
                        <div class="input">
                            <b-form-checkbox id="checkbox-1" v-model="status" name="checkbox-1" value="accepted" unchecked-value="not_accepted">Livraison rapide (5€)</b-form-checkbox>
                            <b-form-checkbox id="checkbox-2" v-model="status" name="checkbox-2" value="accepted" unchecked-value="not_accepted"> Livraison gratuite</b-form-checkbox>
                        </div>
                    </div>
                    <div class="bg-white total mt-5 text-center">
                        <b-row align-h="between" class="mt-2">
                            <b-col cols="4" md="6"><h3>Prix Total</h3></b-col>
                            <b-col cols="4" md="6"><h5>15€</h5></b-col>
                        </b-row>
                    </div>

                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
    export default {
        name: "Panier"
    }
</script>

<style scoped>

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
    }
    .button-panier{
        background-color: #3C618C;
        border: none;
        height: 40px;
        border-radius: 10px;
    }
</style>