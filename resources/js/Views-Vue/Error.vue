<template>
    <div class="error">
        <b-row class="pt-5" align-h="center" >
            <img src="../../../public/img/404.png" class="picture"/>

        </b-row>
    </div>
</template>

<script>
    export default {
        name: "Error"
    }
</script>

<style scoped>
    .error{
        height: 680px;
        background-image: url("../../../public/img/fondcarousel.png");
        background-size: 1500px;
    }
    .picture{

        height: 300px;
    }

</style>