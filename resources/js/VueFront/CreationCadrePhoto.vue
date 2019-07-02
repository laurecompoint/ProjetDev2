<template>
    <div class="">
        <h1 class="text-center mt-4">Personnaliser votre cadre-photo</h1>
        <div class="line mt-4"></div>
        <form @submit.prevent="Onorder">
            <b-row class="creation m-auto" >
                <b-col cols="9" md="3" class="text-center">
                    <div class="text-promo mt-5"></div>
                    <div class="customize-choice">
                        <h6 class="">Choisir une photo</h6>
                        <div class="w-75 m-auto">
                            <label>
                                <figure class="inputfile">
                                    <input type="file" @change="previewImage" accept="image/*">
                                    <font-awesome-icon icon="images" style="font-size:40px; color: #3C618C; cursor: pointer" />
                                </figure>
                            </label>
                            <div class="w-75 m-auto inputtext">
                                <input class="mt-2"  type="hidden" v-model="orders.name"  placeholder="name"/>
                                <input class="mt-2"  type="hidden" v-model="orders.price"  placeholder="name"/>
                                <input class="mt-2"  type="hidden" v-model="orders.user"  placeholder="name"/>
                                <b-form-input class="mt-2" maxlength="30" v-model="orders.text" placeholder="Entrer votre text"></b-form-input>
                            </div>
                        </div>
                    </div>
                </b-col>
                <b-col cols="12" md="9" class="customizes mt-5">
                <div class="customizesblock">


                            <div class="image-preview" v-if="orders.image.length > 0">
                                <img class="preview" :src="orders.image">
                            </div>
                            <p class="text-center mt-4 textgoodies">{{ orders.text }}</p>
                </div>
                </b-col>
            </b-row>
            <b-container>
                <div class="text-center position-button text-center container-fluid">
                    <b-button  type="summit" class="button" style="">Ajouter au panier</b-button>
                </div>
            </b-container>
        </form>

    </div>
</template>

<script>
    import {mapActions} from 'vuex'
    export default {
        name: "HelloWorld",
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                orders:{
                    image: "",
                    name: "Cadre-Photo",
                    price: "18",
                    text: 'Votre texte sera ici',
                    nombrephoto: '1',
                },
            };
        },
        methods: {
            ...mapActions([
                'orderCadrePhoto'
            ]),
            Onorder(){
                this.orderCadrePhoto(this.orders)
            },
                previewImage: function(event) {

                    var input = event.target;

                    if (input.files && input.files[0]) {

                        var reader = new FileReader();

                        reader.onload = (e) => {

                            this.orders.image = e.target.result;
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                },

        }
    };
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .image-preview{
        margin-top: 100px;
        margin-left: 77px;


    }
    .inputfile input{
        display: none;
    }
    .customizesblock{
        margin-left: 250px;
        background-image: url('../../../public/img/cadrephotoperso.png');
        background-repeat: no-repeat;
        background-position: end;
        background-size: 550px;
        height: 500px;
    }
    img.preview {
        width: 400px;
        background-color: white;
        border: 1px solid #DDD;
    }
    .textgoodies{
        background-color: #efefef;
        position: absolute;
        top: 340px;
        left:300px;
        height: 32px;
        width: 42%;
    }
    .inputfile input{
        display: none;
    }
    h5{
        color: #3C618C;
    }
    .customizes{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: flex-end;


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
        margin-left: 50px;
    }
    .customize-choice{
        position: absolute;
        top: 100px;
        left: 72px;
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

    @media (max-width: $responsive-tablet) {
        .customize-choice{
            top: 90px;
            left: 50px;
        }
        .image-preview{
            margin-top: 55px;
            margin-left: 43px;

        }
        .inputtext input{
            width: 100px;
        }
        .customizes{
            background-size: 400px;
        }
        img.preview {
            width: 215px;

        }
        .customizesblock{
            background-size: 300px;
        }
        .textgoodies{
            top: 150px;
        }


    }
    @media (max-width: $responsive-mobile) {
        .customize-choice{
            top: 90px;
            left: 100px
        }
        .customizesblock{
            margin-left: 50px;
        }
        img.preview {
            width: 150px;
        }

        p{
            margin-left: -30px;
        }
        .textgoodies{
            left: 150px;
        }

    }
</style>
