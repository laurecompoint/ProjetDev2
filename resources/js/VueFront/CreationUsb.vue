<template>
    <div class="">
    <h1 class="text-center mt-4">Personnalise votre clé Usb</h1>
    <div class="line mt-4"></div>
        <form @submit.prevent="Onorder">
        <b-row class="creation">
            <b-col cols="9" md="3" class="text-center">
                <div class="text-promo mt-5"></div>
                <div class="customize-choice">
                    <h6 class="">Ecrire votre text</h6>
                    <div class="w-75 m-auto">
                                <label class="inputfile">

                                        <font-awesome-icon icon="text-height" style="font-size:40px; color: #3C618C; cursor: pointer" />
                                </label>
                                <div class="w-75 m-auto inputtext">

                                    <b-form-input class="mt-2" maxlength="25" v-model="orders.text" placeholder="Entrer votre text"></b-form-input>
                                </div>

                    </div>

                </div>
            </b-col>
            <b-col cols="12" md="9" class="customizes">
                <div class="customizesblock">

                    <p class="text-center mt-4">{{ orders.text }} </p>

                </div>
            </b-col>
        </b-row>

        <b-container>
            <div class="text-center position-button text-center container-fluid">
                <b-button type="summit" class="button">Ajouter au panier</b-button>
            </div>
        </b-container>

        </form>

        </div>
</template>

<script>
    import {mapActions} from 'vuex'
    export default {
        name: "Creation-Mugs",
        data() {
            return {
                orders:{
                    name: "Mugs",
                    price: "15",
                    text: 'Votre text sera ici',
                    nombrephoto: 'Pas de photo (Text seulement)',
                },
            };
        },
        mounted () {


        },
        computer:{

        },
        methods: {
            ...mapActions([
                'orderUsb'
            ]),
            Onorder(){
                this.orderUsb(this.orders)
            },
        },

    };
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .inputfile input{
        display: none;
    }
    img.preview {
        width: 250px;
    }
    .creation{
        width: 90%;
        margin: auto;

    }
    h5{
        color: #3C618C;
    }
    .customizes{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url('../../../public/img/cleusb.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 500px;
        height: 500px;

    }
    .customizesblock{
        margin-left: 190px;
    }
    .customizesblock{
        -webkit-transform: rotate(33deg);
    }
    .inputtext input{
        background-color: transparent;
        border: solid #3C618C;
        margin: auto;
        border-radius: 0px;
    }
    .text-promo{
        height: 220px;
        width: 220px;
        background: white;
        box-shadow: 8px 8px 12px #6C8EAD;
        -webkit-transform: rotate(45deg);
        border-radius: 90px;
    }
    .customize-choice{
        position: absolute;
        top: 100px;
        left: 28px;
    }
    .button, :hover .button{
        background-color:  #54A3AD;
        border-radius: 10px;
        border-color: #54A3AD;

    }
    .position-button{
        display: flex;
        justify-content: flex-end;
        padding-bottom: 30px;

    }
    @media (max-width: $responsive-mobile) {

        .picture-mugs{
            width:85%
        }
        .border-customizes{
            justify-content: right;
        }
        p{
            margin-left: -30px;
        }
    }
    @media (max-width: $responsive-tablet) {
        .customize-choice{
            top: 90px;
            left: 50px;
        }
        input{
            width: 120px;
        }
        .customizes{
            background-size: 400px;
        }

    }

</style>
