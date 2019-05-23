<template xmlns="http://www.w3.org/1999/html">
    <div class="background">
        <h1 class="text-center mt-4">Choisir vos photos</h1>
        <div class="line mt-4"></div>

        <div class="text-center">
            <label for="file" class="label-file text-center"><img src="img/ordi.png"  class="w-25 mt-5"/></label>
           <div class="picture-file mt-5">
               <input id="file" v-on="image" class="input-file" type="file">
           </div>
            <p CLASS="mt-5 pb-3"> Choisir vos photos puis crée votre albums...
           <br> Utilisation facile et rapide</p>
        </div>

    </div>

</template>

<script>
    export default {
        name: "ImageOrdinateur",
        methods: {
            formatNames(files) {
                if (files.length === 1) {
                    return files[0].name
                } else {
                    return `${files.length} files selected`
                }
            }
        }
    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .picture{
        color: #3C618C;
        text-decoration: Scrollbar;
    }
    p{
        color: #3C618C;
    }
    .label-file {
        cursor: pointer;
        color: #00b1ca;
        font-weight: bold;
    }
    .label-file:hover {
        color: #25a5c4;
    }
    // et on masque le input
    .input-file {
        display: none;
    }
    .picture-file{
        margin-left: 550px;
        @media (max-width: $responsive-tablet) {
            margin-left: 250px;
        }
        @media (max-width: $responsive-mobile) {
            margin-left: 60px;
        }
    }


</style>