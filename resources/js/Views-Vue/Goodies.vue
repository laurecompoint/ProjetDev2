<template>
    <div class="add">
        <div class="goodies-losange">
            <div class="text-promotion text-center">
                <h4 class="color">GOODIES</h4>
                <p class="color">Retrouver tous nos Goodies</p>
            </div>
        </div>
        <b-container class="product">
            <b-row class="pb-5 row" align-h="around">
                <b-card cols="4" class="background-image mt-5" style="max-width: 20rem;" align-h="around"  v-for="goodie in goodies" v-bind:key="goodie.id">
                    <div>
                        <h5>{{ goodie.name }}</h5>
                        <img v-bind:src="goodie.image" class="picture mx-auto d-block mt-5"/>
                        <p class="mt-5">Prix : {{ goodie.price }}€</p>

                        <div class="button-produits"><router-link  v-bind:to="goodie.link">Voir le produit</router-link></div>
                    </div>
                </b-card>
            </b-row>
        </b-container>

    </div>
</template>

<script>
    export default {
        name: "Goodies",
        created () {
            window.scrollTo(0,0);

        },
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                goodies: [],

            }
        },
        mounted () {
            axios.get(`${this.api}goodies`)
                .then(res => this.goodies = res.data)
                .catch(err => console.log(err))

        }


    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .background-image{
        height: 390px;
        width: 800%;
    }
    .product{
        margin-top: 200px;
        float: right;
        min-height: 200px;
    }
    .text-promotion{
        -webkit-transform: rotate(-45deg);
        margin-right: 40px;
        padding-top: 90px
    }
    .margin{
        min-height: 450px;
    }
    h4{
        color: #6C8EAD;
    }
    .add{
        background-color: white;
        min-height: 1200px;
    }
    .button-produits{
        background-color: #6C8EAD;
        border-color: #6C8EAD;
        width: 50%;
        height: 40px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        align-self: center;
    }
    .background-image{
        background-image: url("../../../public/img/fondimage.png");
        background-size: 320px;
        border-radius: 10px;
    }
    .picture{
        width: 70%;

    }
    .row{
        display: flex;
        flex-wrap: wrap;
    }
    :hover a{
        color: white;
        text-decoration: none;
    }
    @media (max-width: $responsive-mobile) {
        .add{
            min-height: 2000px;
        }

    }

</style>