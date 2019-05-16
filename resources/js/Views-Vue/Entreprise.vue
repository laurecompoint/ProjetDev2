<template>
    <div class="add">
        <div class="compagny text-center">

             <h2>Notre entreprise - CREATIVE PICTURE</h2>
             <h2>Cree vos propre souvenire</h2>
             <h2>Avec notre site</h2>

        </div>
        <h3 class="title mt-5">Notre contacter</h3>
        <b-container class="mt-5">
            <b-row align-h="between">
                <b-col cols="12" md="7" class="responsive-margin">
                    <p class="text-justify">Notre entreprise vous permet de transformez vos meilleurs souvenirs ou événement en cadeaux personnalisés.
                        Vous pouvez personnalisé plusieur objet ou crée votre propre albums photo.
                    </p>
                    <div class="icon-contact">
                    <b-row no-gutters align-v="center">
                        <font-awesome-icon class="icon-map" cols="1" icon="map-marker-alt" style="font-size:20px; color: #3C618C" />
                         <p cols="5" class="mt-3 ml-2">Adresse : 30 avenues des fleurs, 75120, Paris</p>
                    </b-row>
                    <b-row no-gutters align-v="center">
                        <font-awesome-icon cols="1" icon="at" style="font-size:20px; color: #3C618C" />
                        <p cols="5" class="mt-3 ml-2">Mail : creativepicture@gmail.com</p>
                    </b-row>
                    <b-row no-gutters align-v="center">
                        <font-awesome-icon cols="1" icon="tty" style="font-size:20px; color: #3C618C" />
                        <p cols="5" class="mt-3 ml-2">Numéro de téléphone :  01 23 34 56 67</p>
                    </b-row>
                    </div>
                </b-col>
                <b-col cols="12" md="4" class="text-right responsive-entreprise">
                    <div class="text-entreprise mt-1">
                        <img src="../../assets/img/logoentreprise.png" class="w-75 mr-4 mt-4"/>
                    </div>
                </b-col>
            </b-row>
        </b-container>
        <h3 class="title" id="title">Notre politique</h3>
        <b-container cols="12" class="bv-example-row mt-5 pb-5 text-justify">

            <p class="responsive-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Dicta, ex ipsam libero porro quasi reiciendis voluptates?
                Accusamus architecto dolores error exercitationem harum labore nemo, quasi sequi totam ut vel velit!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, assumenda blanditiis consequuntur dicta dignissimos earum expedita labore molestiae necessitatibus nesciunt pariatur perspiciatis, porro, sed sequi soluta suscipit ullam veritatis voluptas?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem consectetur, dolor est eveniet fuga fugiat fugit laborum, nesciunt optio perferendis provident quibusdam quis quo soluta sunt temporibus unde voluptates!
            </p>
            <p class="responsive-margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere rerum ut vitae! Animi aspernatur consequatur dicta dolor dolorem dolores, et, impedit minima modi nihil pariatur quasi reprehenderit sapiente suscipit.
            </p>
        </b-container>
        <h3 class="title">Nos produits</h3>
        <b-container class="bv-example-row mt-5 pb-5">
            <b-row align-h="between">
                <b-col cols="12" md="8" class="responsive-margin">
                    <p class="text-justify">Retrouver nos objets personnalisé aisni que nos albums photo à personnalisé comme vous le souhaitez !!!
                        Allez directement personnalisé votre future albums sur notre site, vous pourez choisir vos format de page, vos images, vos textes...
                    </p><p>La création de votre albums sera facile et rapide d'utilisation.<br> La meme chose est aussi disponible pour nos objects personnalisés.
                Nous proposont des mugs, des cadres photos...
                </p>
                </b-col>
                <b-col cols="12" md="3">
                    <div class="mt-5">
                        <img src="../../assets/img/produitensemble.png" class="produits mt-3"/>
                        <b-button class="mt-3 button2" to="/album">Creation Album</b-button>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
    export default {
        name: "Entreprise",
        created () {
            window.scrollTo(0,0);
        }
    }

</script>

<style scoped lang="scss">
    $responsive-tablet: 768px;
    $responsive-mobile: 425px;
    .compagny{
        background-image: url("../../assets/img/entreprise.png");
        background-size: 1450px;
        height: 560px;
        padding-top: 190px;
    }
    h2{
        color: white;
    }
    .text-entreprise{
        background-color: #6C8EAD;
        margin-left: 185px;
        height: 230px;
        width: 230px;
        -webkit-transform: rotate(45deg);
        border-radius: 80px;
    }
    .responsive-margin{
        margin-left: -67px;
    }
    .title{
        padding-left: 90px;
    }
    .icon-contact{
        line-height: 0.1rem;
    }
    .icon-map{
        margin-left: 4px;
    }
    .add{
        background-color: white;
    }
    .produits{
        width: 120%;
    }
    .button2{
        background-color: #54A3AD;
        border: none;
        border-radius: 10px;
        margin-left: 80px;
    }
    .btn{
        display: inline;
    }
    @media (max-width: $responsive-tablet) {
        .responsive-entreprise{
            display: none;
        }
        .responsive-margin{
            margin-left: 50px;

        }
        .produits{
            width: 90%;
        }
        .button2{
            margin-left: 0px;
        }
        .title{
            margin-top: 2px
        }
        #title{
            margin-top: 40px;
        }
    }
    @media (max-width: $responsive-mobile) {
        .responsive-margin{
            margin-left: 0px;

        }
        .button2{
            margin-left: 120px;

        }
        .produits{
            margin-left: 20px;

        }
        #title{
            margin-top: 40px;
        }
    }
</style>