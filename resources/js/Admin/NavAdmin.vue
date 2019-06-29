<template>
    <div class="">
        <div class="admin-nav">
            <div class="text-promotion text-center">
                <router-link to="/admin-user"><h6>Utilisateurs ({{ nbusers }})</h6></router-link>
                <router-link to="/admin-produit"><h6>Produits  ({{ nbproduits }})</h6></router-link>
                <router-link to="/admin-faqs"><h6>Faqs ({{ nbfaqs }})</h6> </router-link>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "NavAdmin",
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                nbfaqs: [],
                nbusers: [],
                nbproduits: []
            }
        },
        mounted () {

            axios.get(`${this.api}admim-faq`)
                .then(res => this.nbfaqs = res.data)
                .catch(err => console.log(err))

            axios.get(`${this.api}admin-users`)
                .then(res => this.nbusers = res.data)
                .catch(err => console.log(err))
            axios.get(`${this.api}admin-produits`)
                .then(res => this.nbproduits = res.data)
                .catch(err => console.log(err))

        },

    }
</script>
<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .nav-admin{
        background-color: #3C618C;
        margin-top: 40px;
    }
    .admin-nav{
        -webkit-transform: rotate(45deg);
        border-radius: 80px;
        height: 230px;
        width: 230px;
        box-shadow: 8px 8px 12px #6C8EAD;
        margin-left: 60px;
        margin-top: 40px;
    }
    a {
        text-decoration: none;
    }
    H6{
        color:black;
        font-size: 20px;
    }
    .text-promotion{
        margin-right: 50px;
        padding-top: 85px;
    }
    @media (max-width: $responsive-mobile) {
        .admin-nav, .text-promotion{
            margin-left: 0px;
        }

    }

</style>