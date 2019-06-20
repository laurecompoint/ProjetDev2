<template>
    <div class="">
        <h1 class="text-center mt-4">Personnalise votre calendrier</h1>
        <div class="line mt-4"></div>
        <div class="error">
            <b-row class="pt-5" align-h="center" >
                <img src="../../../public/img/goodiespasdisponible.png" class="picture"/>

            </b-row>
        </div>
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
    .error{
        height: 680px;
        background-image: url("../../../public/img/fondcarousel.png");
        background-size: 1500px;
    }
    .picture{

        height: 300px;
    }
</style>
