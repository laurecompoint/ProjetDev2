<template>
    <div class="background text-justify pb-5 ">

        <h1 class="text-center mt-4">Modifier User</h1>
        <div class="line mt-4"></div>

        <b-row align-h="between" class="mt-3 pb-5">
            <div class="info" cols="6">

            </div>

            <b-col cols="4" class="block-image"> <p CLASS="text-center mt-5"><font-awesome-icon icon="user" style="font-size:200px; color: #3C618C" /></p></b-col>
        </b-row>
    </div>
</template>

<script>

    export default {
        name: "FaqsModif",
        data() {
            return {

            }
        },
    }

</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .info{
        padding-top: 600px;
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