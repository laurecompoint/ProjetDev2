<template>
    <div class="" v-bind:key="produit.id">
        <div class="mt-5">
            <b-row  class="mt-3 test" align-h="around">
                <b-col cols="12" md="7" class="livraison title">
                    <h5 class="mt-2">Plus d'informations sur {{ produit.name }} </h5>
                    <p class="mt-4"><strong> - Description : </strong> {{ produit.description }} </p>
                    <p><strong> - Personnalisation : </strong> Possibilité d'ajouter des photos et du texte </p>
                    <p><strong> -  Délai de fabrication : </strong> {{ produit.fabrication }} </p>
                    <p><strong> - Prix : </strong> {{ produit.price }}€ hors taxe </p>
                    <p class="text-justify w-75"><strong> - Autres détails : </strong> {{ produit.content }}</p>
                    <h5 class="mt-5">A propos de la livraison</h5>
                    <b-row  class="p-0 m-0 mt-3">
                        <b-col cols="3"  md="1" class="p-0 m-0">
                            <font-awesome-icon class="font-awesome-icon" icon="truck" style="font-size:50px; color: #3C618C" />
                        </b-col>
                        <b-col cols="10" md="11"  class="p-0 m-0">
                        <p class="mt-3 text-livraison" md="7">Nous prenons tout le temps nécessaire pour imprimer avec soin  puis protéger vos créations avant leur livraison.</p>
                        </b-col>
                    </b-row>
                    <h6 >Moyen de livraison : </h6>
                    <strong > - Livraison Rapide </strong>
                    <p class="mt-2 pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </b-col>
                <b-col cols="12" md="4" class="" align-v="center">

                    <div class="produits-losange m-auto">
                    </div>
                    <div class="products-title text-center">
                        <h4>{{ produit.name }}</h4>
                        <h4>{{ produit.price }}€</h4>
                    </div>
                    <img v-bind:src="produit.image"  class="picture w-75 d-block"/>
                    <div class="text-center">
                        <b-button  class="button" style="" v-bind:href="produit.linkcreation"><strong style="font-size: 20px;">Creation {{ produit.name }}</strong></b-button>
                    </div>
                </b-col>
            </b-row>
        </div>

    </div>
</template>

<script>
    export default {
        name: "Produits",
        data() {
            return {
                api: process.env.MIX_API_LOCAL,
                produit: [],
                url: window.location.href,
                album: 'http://127.0.0.1:8000/album',
                mugs: 'http://127.0.0.1:8000/mugs',
                memorie: 'http://127.0.0.1:8000/memorie',
                cadrephoto: 'http://127.0.0.1:8000/cadrephoto',
                calendrier: 'http://127.0.0.1:8000/calendrier',
                usb: 'http://127.0.0.1:8000/cle-usb'
            }
        },
        created () {
            window.scrollTo(0,0);
        },
        mounted () {
            if ( this.url === this.album) { var id = 1 }
            if ( this.url === this.calendrier) { var id = 7}
            if ( this.url === this.mugs) { var id = 3 }
            if ( this.url === this.cadrephoto) { var id = 5 }
            if ( this.url === this.usb) { var id = 6 }

            axios.get(`${this.api}goodies/${id}`)
                .then(res => this.produit = res.data)
                .catch(err => console.log(err))



        }

    }
</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .app{
        background-color: white;
    }
    .products-title{
        width: 50%;
        position: absolute;
        top: 50px;
        left: 130px;
    }
    .margin{
        min-height: 450px;
    }
    h4{
        color: #6C8EAD;
        margin-left: -20px;
    }
    h5{
        color: #6C8EAD;
    }
    .background-slide h5{
        color: white;
    }
    .price{
        margin-left: -25px;
    }
    .button-produits{
        background-color: #6cb2eb;
        border-raduis: 10px;
        border-color: #6cb2eb;
    }
    .title{
        padding-left: 90px;
    }
    .livraison{
        padding-left: 45px;
    }
    .button, :hover .button{
        background-color:  #54A3AD;
        border-radius: 10px;
        border-color: #54A3AD;
        margin-top: 200px;
    }
    .picture{
        position: absolute;
        top: 140px;
        left: 65px;
    }
    .add{
    }
    .icon{
        display: flex;
        flex-direction: column;
        align-self: flex-end;
    }
    .row{
        margin-right: 0px;
    }
    .text-livraison{
        margin-left: 5px;
    }
    @media (max-width: $responsive-tablet) {
        .icon-livraison{
            position: absolute;
            top: 1010px;
            left: 530px;
        }
        .picture{
            position: absolute;
            left: 40px;
        }

        .text-promotion{
            position: absolute;
            left: 80px;
        }
        .button{
            margin-top: 70px;
        }
        .text-livraison{
            margin-left: -1.9rem;
        }
        .font-awesome-icon{
            display: none;
        }

    }

    @media (max-width: $responsive-mobile) {
        .picture{
            position: absolute;
            top: 150px;
        }
        .text-promo{
            margin-left: 30px;
            margin-top: -80px;
        }
        .text-livraison{
            padding-left: 30px;
        }
        .title, .livraison{
            padding-left: 45px;
        }
        .test{
            display: flex;
            flex-direction: column-reverse;

        }
        .text-promotion{
            margin-left: 35px;
        }
        .button{
            margin-top: 170px;
        }

    }

</style>