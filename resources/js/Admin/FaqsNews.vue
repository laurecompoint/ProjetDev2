<template>
    <div class="background text-justify">

        <h1 class="text-center mt-4">Ajouter Faq</h1>
        <div class="line mt-4"></div>
        <b-row align-h="between" class="mt-3 pb-5">
            <form  @submit.prevent="Onfaqsnew">
            <div class="info" cols="6">
                <label  class="mt-5 email">Catégorie</label>
                <small v-if="errors.name">
                    <p class="text-danger" v-for="Error in errors.name">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input  type="text" v-model="faqs.name" placeholder="categorie name"></b-form-input>
                <label  class="mt-3 email">Question</label>
                <small v-if="errors.question">
                    <p class="text-danger" v-for="Error in errors.question">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="text" v-model="faqs.question" placeholder="question"></b-form-input>
                <label  class="mt-3 email">Réponse</label>
                <small v-if="errors.answer">
                    <p class="text-danger" v-for="Error in errors.answer">
                        {{ Error }}
                    </p>
                </small>
                <b-form-input type="text" v-model="faqs.answer" placeholder="reponse"></b-form-input>
                <b-button type="submit" class="mt-3 mb-5 button-compte">Ajouter</b-button>
            </div>
            </form>

            <b-col cols="4" class="block-image"> <p CLASS="text-center mt-5"><font-awesome-icon icon="question" style="font-size:200px; color: #3C618C" /></p></b-col>
        </b-row>
    </div>
</template>

<script>
    import {mapActions} from 'vuex'
    export default {
        name: "FaqsNews",
        data() {
            return {
                faqs:{
                    name: '',
                    question: '',
                    answer: '',
                },
                errors: {

                }
            }
        },
        methods : {
            ...mapActions([
                'faqsnew'
            ]),
            Onfaqsnew() {
                this.faqsnew(this.faqs)
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
    input{
        width: 50%;
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