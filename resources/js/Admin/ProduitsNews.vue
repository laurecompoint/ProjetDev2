<template>
    <div class="background text-justify">

        <h1 class="text-center mt-4">Ajouter Produit</h1>
        <div class="line mt-4"></div>
        <b-row align-h="between" class="mt-3 pb-5">
            <form  @submit.prevent="Onproductnew">
                <div class="info" cols="6">
                    <label  class="mt-5 email">Nom du produit</label>
                    <small v-if="errors.name">
                        <p class="text-danger" v-for="Error in errors.name">
                            {{ Error }}
                        </p>
                    </small>
                    <b-form-input type="text" v-model="produits.name" placeholder="name"></b-form-input>
                    <label  class="mt-3 email">Image</label>
                    <small v-if="errors.image">
                        <p class="text-danger" v-for="Error in errors.image">
                            {{ Error }}
                        </p>
                    </small>
                    <b-form-input type="file" v-model="produits.image" placeholder="image"></b-form-input>
                    <label  class="mt-3 email">Prix du produit</label>
                    <small v-if="errors.price">
                        <p class="text-danger" v-for="Error in errors.price">
                            {{ Error }}
                        </p>
                    </small>
                    <b-form-input type="text" v-model="produits.price" placeholder="prix"></b-form-input>
                    <label  class="mt-3 email">Contenu</label>
                    <small v-if="errors.content">
                        <p class="text-danger" v-for="Error in errors.content">
                            {{ Error }}
                        </p>
                    </small>
                    <b-form-input type="text" v-model="produits.content" placeholder="content"></b-form-input>
                    <label  class="mt-3 email">Description</label>
                    <small v-if="errors.content">
                        <p class="text-danger" v-for="Error in errors.description">
                            {{ Error }}
                        </p>
                    </small>
                    <b-form-input type="text" v-model="produits.description" placeholder="description"></b-form-input>
                    <label  class="mt-3 email">Fabrication</label>
                    <small v-if="errors.fabrication">
                        <p class="text-danger" v-for="Error in errors.fabrication">
                            {{ Error }}
                        </p>
                    </small>
                    <b-form-input type="text" v-model="produits.fabrication" placeholder="delai-fabrication"></b-form-input>
                    <b-button type="submit" class="mt-3 mb-5 button-compte">Ajouter</b-button>
                </div>
            </form>

            <b-col cols="4" class="block-image"> <p CLASS="text-center mt-5"><font-awesome-icon icon="camera" style="font-size:200px; color: #3C618C" /></p></b-col>
        </b-row>
    </div>
</template>

<script>
    export default {
        name: "FaqsNews",
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                produits:{
                    name: '',
                    image: '',
                    price: '',
                    content: '',
                    description: '',
                    fabrication: "",
                },
                errors: {}
            }
        },
        methods : {
            Onproductnew() {
                axios.post(`${this.api}produits-new`, this.produits)
                    .then(res => {
                        this.$router.push('/admin-produit')

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
    .info{
        padding-left: 105px;
    }
    .button-compte{
        background-color: #6C8EAD;
        border-radius: 10px;
        border: none;
    }
    .form-control{
        width: 350%;
        border-radius: 0px;
        border: Solid #6C8EAD 3px;
    }
    @media (max-width: $responsive-mobile) {
        .form-control{
            width: 150%;
        }
        .info{
            padding-left: 70px;
        }
        .block-image{
            display: none;
        }
        .row{
            margin-right: 0px;
        }
    }
    @media (max-width: $responsive-tablet) {
        .form-control{
            width: 140%;
        }
        .row{
            margin-right: 0px;
        }
    }
</style>