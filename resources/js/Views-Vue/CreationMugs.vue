<template>
    <div class="background">
        <h1 class="text-center mt-4">Personnalise votre mugs</h1>
        <div class="line mt-4"></div>
        <b-row class="creation">
            <b-col cols="6" md="3" class="text-center">
                <div class="text-promo mt-5"></div>
                <div class="customize-choice">
                    <h6 class="title">Choisir une photo</h6>
                    <div class="w-75 m-auto">
                        <label for="file" class="label-file"><font-awesome-icon icon="images" style="font-size:40px; color: #3C618C" /></label>
                        <input id="file" v-on="image" class="input-file" type="file">
                    </div>
                    <div class="w-75 m-auto">
                        <b-form-input class="mt-2" v-model="text" placeholder="Entrer votre text"></b-form-input>
                    </div>
                </div>
            </b-col>
            <b-col cols="6" md="9" class="customizes">
                <div class="customizesblock">
                    <div class="border-customizes">
                        <img src="" class="w-50"/>
                    </div>
                    <p class="text-center mt-4">{{ text }}</p>
                </div>
            </b-col>
        </b-row>
        <b-container>
        <div class="text-center position-button text-center container-fluid">
            <b-button  class="button" style="">Ajouter au panier</b-button>
        </div>
        </b-container>
        </div>

</template>

<script>
    export default {
        name: "Produits",
        data() {
            return {
                image: '',
                text: '',

            }
        },
        created () {
            window.scrollTo(0,0);
        },
        methods: {




        }


    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .label-file {
        cursor: pointer;
        color: #00b1ca;
        font-weight: bold;
    }
    .label-file:hover {
        color: #25a5c4;
    }
    // et on masque le input
    .input-file {
        display: none;
    }
    .creation{
        width: 90%;
        margin: auto;

    }
    h5{
        color: #3C618C;
    }
    .background{
        min-height: 680px;
    }
    .customizes{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url('../../assets/img/customugs.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 500px;
        height: 500px;



    }
    .customizesblock{
        margin-left: 150px;
    }
    .border-customizes{
        border: solid gainsboro;
        min-height: 200px;
        width: 250px;

    }
    input{

        background-color: transparent;
        border: solid #3C618C;
        margin: auto;
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

    }
    @media (max-width: $responsive-mobile) {


    }
    @media (max-width: $responsive-tablet) {

    }
</style>