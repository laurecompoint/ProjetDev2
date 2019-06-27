<template>
    <div class="error">
        <div class="pt-5" align-h="center" >
            <img src="../../../public/img/404.png" class="picture mx-auto d-block"/>

        </div>
    </div>
</template>

<script>
    export default {
        name: "Error"
    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .error{
        height: 680px;
        background-image: url("../../../public/img/fondcarousel.png");
        background-size: 1500px;
    }
    .picture{
        height: 300px;
    }
    @media (max-width: $responsive-mobile) {
        .picture{
            height: 150px;
        }
    }

</style>