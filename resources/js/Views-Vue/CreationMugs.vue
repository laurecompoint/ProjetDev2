<template>
    <div class="">
    <h1 class="text-center mt-4">Personnalise votre mugs</h1>
    <div class="line mt-4"></div>
        <form @submit.prevent="goodies">
        <b-row class="creation">
            <b-col cols="9" md="3" class="text-center">
                <div class="text-promo mt-5"></div>
                <div class="customize-choice">
                    <h6 class="">Choisir une photo</h6>
                    <div class="w-75 m-auto">
                                <label for="fileInput" slot="upload-label">
                                    <figure>
                                        <font-awesome-icon icon="images" style="font-size:40px; color: #3C618C; cursor: pointer" />
                                    </figure>
                                </label>
                                <div class="w-75 m-auto">
                                    <b-form-input class="mt-2" maxlength="30" v-model="text" placeholder="Entrer votre text"></b-form-input>
                                </div>

                    </div>

                </div>
            </b-col>
            <b-col cols="12" md="9" class="customizes">
                <div class="customizesblock">
                    <image-uploader
                            :preview="true"
                            :className="['fileinput', { 'fileinput--loaded': hasImage }]"
                            capture="environment"
                            :debug="1"
                            doNotResize="gif"
                            :autoRotate="true"
                            outputFormat="verbose"
                            @input="setImage"
                            v-model="image"

                    >
                    </image-uploader>
                    <p class="text-center mt-4">{{ text }}</p>
                </div>
            </b-col>
        </b-row>
        <b-container>
            <div class="text-center position-button text-center container-fluid">
                <b-button  class="button" style="">Ajouter au panier</b-button>
            </div>
        </b-container>
        </form>

        </div>
</template>

<script>
    export default {
        name: "Creation-Mugs",
        data() {
            return {
                hasImage: false,
                image: null,
                text: 'Votre text sera ici'
            };
        },
        methods: {
            setImage: function(output) {
                this.hasImage = true;
                this.image = output;
                console.log(this.image);
            }
        }
    };
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style  lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    #fileInput {
        display: none;
    }
    .customizesblock img{
        width: 33%;
        margin-left: 261px;
    }
    image-uploader{
        width: 50%;
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
        background-image: url('../../../public/img/customugs.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 500px;
        height: 500px;

    }
    .customizesblock{
        margin-left: 150px;
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
        padding-bottom: 30px;

    }
    .picture-mugs{
        width: 100%;
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
