<template>
    <div class="">
        <h1 class="text-center mt-4">Personnalise votre calendrier</h1>
        <div class="line mt-4"></div>
        <form @submit.prevent="goodies">
            <b-row class="creation">
                <b-col cols="9" md="3" class="text-center">
                    <div class="text-promo mt-5"></div>
                    <div class="customize-choice">
                        <h6 class="">Choisir 12 photos</h6>
                        <div class="w-75 m-auto">
                            <label for="fileInput" slot="upload-label">
                                <figure>
                                    <font-awesome-icon icon="images" style="font-size:40px; color: #3C618C; cursor: pointer" />
                                </figure>
                            </label>
                        </div>
                    </div>
                </b-col>
                <b-col cols="12" md="9" class="">
                    <b-row class="pb-5 row" align-h="around">
                        <b-card cols="4" class="mt-5 calendar" style="max-width: 20rem;" align-h="around">

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
                                <img src="../../../public/img/janvier2020.jpg" class="w-100"/>

                        </b-card>
                        <b-card cols="4" class="mt-5 calendar" style="max-width: 20rem;" align-h="around">
                            <div>
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
                                <img src="../../../public/img/janvier2020.jpg" class="w-100"/>
                            </div>
                        </b-card>
                        <b-card cols="4" class="mt-5 calendar" style="max-width: 20rem;" align-h="around">
                            <div>
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
                                <img src="../../../public/img/janvier2020.jpg" class="w-100"/>
                            </div>
                        </b-card>
                        <b-card cols="4" class="mt-5 calendar" style="max-width: 20rem;" align-h="around">
                            <div class="">
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
                                <img src="../../../public/img/janvier2020.jpg" class="w-100"/>
                            </div>
                        </b-card>
                        <b-card cols="4" class="mt-5 calendar" style="max-width: 20rem;" align-h="around">
                            <div>
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
                                <img src="../../../public/img/janvier2020.jpg" class="w-100"/>
                            </div>
                        </b-card>
                        <b-card cols="4" class="mt-5 calendar" style="max-width: 20rem;" align-h="around">
                            <div>
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
                                <img src="../../../public/img/janvier2020.jpg" class="w-100"/>
                            </div>
                        </b-card>
                    </b-row>
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
        name: "HelloWorld",
        data() {
            return {
                hasImage: false,
                image: null,
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

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .calendar{
        width: 90%;
    }
    #fileInput {
        display: none;
    }
    .creation{
        width: 90%;
        margin: auto;
    }
    h5{ color: #3C618C; }
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
        left: 58px;
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
    @media (max-width: $responsive-mobile) { }
    @media (max-width: $responsive-tablet) { }
</style>
