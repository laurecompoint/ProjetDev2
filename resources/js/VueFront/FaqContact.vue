<template>
    <div  class="background">
        <h1 class="text-center mt-4">Pour plus d'information</h1>
        <div class="line mt-4"></div>

        <h3 class="contact mt-5">FAQ</h3>
    <div class="" v-for="faq in faqs" v-bind:key="faq.id">
    <div class="contact text-justify" cols="5">
        <h6 class="mt-5">Catégorie : {{ faq.name }}</h6>
        <p class="mt-4 w-75"><strong>Question : </strong>  {{ faq.question }}</p>
        <p CLASS="w-50"><strong>Réponse : </strong>  {{ faq.answer }}</p>
    </div>
    </div>

        <div>
            <b-row align-v="start" class="pb-3 responsive-margin">
            <h3 v-b-toggle.collapse-1 class="mt-5 info">Contact</h3>
            <font-awesome-icon v-b-toggle.collapse-1 icon="angle-down" class="icon ml-3" style="font-size:40px; color: #3C618C" />
            </b-row>
            <b-collapse id="collapse-1" cols="8" class="contact mt-3" align-self="center">
                <form @submit.prevent="" class="mb-3">
                <b-form-input  type="text" placeholder="Name" v-model="contact.name"></b-form-input>
                <b-form-input type="email" class="mt-3 input" placeholder="Email" v-model="contact.email"></b-form-input>
                <b-form-textarea id="textarea" class="mt-3" placeholder="Message..." v-model="contact.message" rows="3" max-rows="6"></b-form-textarea>
                <b-button type="submit" class="mt-3 mb-5 button2">Envoyer</b-button>
                </form>
            </b-collapse>
        </div>


    </div>
</template>

<script>
    export default {
        name: "FaqContact",
        data() {
            return {
                faqs: [],
                contact: {
                    id: '',
                    name: '',
                    email: '',
                    message: ''
                },
            }
        },
        created () {
            window.scrollTo(0,0);
        },
        mounted () {
            axios.get(`faq`)
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
    .form-control{
        width: 30%;
        border-radius: 0px;
        border: Solid #6C8EAD 3px;

    }
    .contact{
        padding-left: 92px;
    }
    .button2{
        background-color: #3C618C;
        border: none;
        width: 130px;
        height: 40px;
        border-radius: 10px;
    }
    .icon{
        margin-top: 50px;
    }
    h6{
        color: #3C618C;
    }
    @media (max-width: $responsive-mobile) {
        .form-control{
            width: 70%;
        }
    }
    @media (max-width: $responsive-tablet) {
        .form-control{
            width: 90%;
        }
        .responsive-margin{
            margin-right: 0px;
        }

    }

</style>