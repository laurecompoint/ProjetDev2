<template>
    <DIV class="">
        <h1 class="text-center mt-4">Personnalise votre memorie</h1>
        <div class="line mt-4"></div>
        <h6 class="mt-4">Choisir une photos pour chaque carte</h6>
        <form @submit.prevent="Onorder">
                    <b-row class="creation mt-5" align-h="between">
                        <label>
                            <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                                <input type="file" @change="previewImage" accept="image/*">
                                <div class="image-preview" v-if="orders.image.length > 0">
                                    <img class="preview" :src="orders.image">
                                </div>
                            </b-col>
                        </label>
                        <label>
                            <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                                <input type="file" @change="previewImage2" accept="image/*">
                                <div class="image-preview" v-if="imageData2.length > 0">
                                    <img class="preview" :src="imageData2">
                                </div>
                            </b-col>
                        </label>
                        <label>
                            <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                                <input type="file" @change="previewImage3" accept="image/*">
                                <div class="image-preview" v-if="imageData3.length > 0">
                                    <img class="preview" :src="imageData3">
                                </div>
                            </b-col>
                        </label>

                        <label>
                            <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                                <input type="file" @change="previewImage4" accept="image/*">
                                <div class="image-preview" v-if="imageData4.length > 0">
                                    <img class="preview" :src="imageData4">
                                </div>
                            </b-col>
                        </label>

                        <label>
                            <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                                <input type="file" @change="previewImage5" accept="image/*">
                                <div class="image-preview" v-if="imageData5.length > 0">
                                    <img class="preview" :src="imageData5">
                                </div>
                            </b-col>
                        </label>
                    </b-row>
            <b-row class="creation mt-5 pt-5" align-h="between">
                <label>
                    <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                        <input type="file" @change="previewImage6" accept="image/*">
                        <div class="image-preview" v-if="imageData6.length > 0">
                            <img class="preview" :src="imageData6">
                        </div>
                    </b-col>
                </label>
                <label>
                    <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                        <input type="file" @change="previewImage7" accept="image/*">
                        <div class="image-preview" v-if="imageData7.length > 0">
                            <img class="preview" :src="imageData7">
                        </div>
                    </b-col>
                </label>
                <label>
                    <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                        <input type="file" @change="previewImage8" accept="image/*">
                        <div class="image-preview" v-if="imageData8.length > 0">
                            <img class="preview" :src="imageData8">
                        </div>
                    </b-col>
                </label>

                <label>
                    <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                        <input type="file" @change="previewImage9" accept="image/*">
                        <div class="image-preview" v-if="imageData9.length > 0">
                            <img class="preview" :src="imageData9">
                        </div>
                    </b-col>
                </label>

                <label>
                    <b-col class="memorie" style="color: #3C618C; cursor: pointer">
                        <input type="file" @change="previewImage10" accept="image/*">
                        <div class="image-preview" v-if="imageData10.length > 0">
                            <img class="preview" :src="imageData10">
                        </div>
                    </b-col>
                </label>
            </b-row>

            <b-container fluid>
                <div class="mt-5 text-center position-button text-center container-fluid">
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
                orders:{
                    image: "",
                    name: "Memorie - 20 carte / 20 photos",
                    price: "15",
                    nombrephoto: '20',
                },
                imageData: "",
                imageData2: "",
                imageData3: "",
                imageData4: "",
                imageData5: "",
                imageData6: "",
                imageData7: "",
                imageData8: "",
                imageData9: "",
                imageData10: ""
            };
        },
        methods: {
            previewImage: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage2: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData2 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage3: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData3 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage4: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData4 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage5: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData5 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage6: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData6 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage7: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData7 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage8: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData8 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage9: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData9 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            previewImage10: function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.imageData10 = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

        }
    };
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .creation{
        width: 90%;
        margin: auto;
    }
    .memorie{
        width: 200px;
        height: 140px;
        border: 5px solid black;
        background-image: url("../../../public/img/memoryback.jpg");
        background-size: 200px;

    }
    .memorie input{
        display: none;
    }
    img.preview {
        width: 200px;
        margin-top: 15px;
        background-color: black;
        border: 1px solid black;
        padding: 5px;
    }
    h5{
        color: #3C618C;
    }
    h6{
        margin-left: 70px;
        font-size: 30px;
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

    }
    @media (max-width: $responsive-tablet) {
        img.preview{
            margin-top: 0px;
        }

    }

</style>
