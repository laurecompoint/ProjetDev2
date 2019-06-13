<template>
    <div class="background text-justify">

        <h1 class="text-center mt-4">Modifier Faq</h1>
        <div class="line mt-4"></div>

        <b-row align-h="between" class="mt-3 pb-5"  v-bind:key="faqs.id">
            <div class="info" cols="6">
                <label  class="mt-5 email">Catégorie</label>
                <b-form-input type="text" v-bind:placeholder="faqs.name"></b-form-input>
                <label  class="mt-3 email">Question</label>
                <b-form-input type="text" v-bind:placeholder="faqs.question"></b-form-input>
                <label  class="mt-3 email">Réponse</label>

                <b-button class="mt-3 mb-5 button-compte">Modifier</b-button>
            </div>

            <b-col cols="4" class="block-image"> <p CLASS="text-center mt-5"><font-awesome-icon icon="question" style="font-size:200px; color: #3C618C" /></p></b-col>
        </b-row>
    </div>
</template>

<script>
    export default {
        name: "FaqsModif",
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                faqs: [],
            }
        },
        mounted (id) {
            console.log(id)
            axios.get(`${this.api}faqs-modif/${id}`)
                .then(res => this.faqs = res.data)
                .catch(err => console.log(err))

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