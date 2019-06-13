<template>
    <div class="">
        <b-row class="creation" align-h="around">
            <b-col cols="9" md="3" class="text-center">
                <NavAdmin></NavAdmin>
            </b-col>
            <b-col cols="9" md="9" class="text-center">
                <h1 class="text-center mt-4">Administration</h1>
                <img src="img/imageadmin.png" class="picture"/>
            </b-col>
        </b-row>
    </div>

</template>

<script>
    import NavAdmin from './NavAdmin.vue'
    export default {
        name: "HomeAdmin",
        components:{
            NavAdmin,
        }
    }
</script>

<style scoped>
.picture{
    width:  39%
}
</style>