<template>
    <div class="add">
        <div class="compagny-picture text-center">

             <h2>Notre entreprise - CREATIVE PICTURE</h2>
             <h2>Crée vos propres souvenirs</h2>
             <h2>Avec notre site</h2>

        </div>
        <h3 class="title mt-5">Nous contacter</h3>
        <b-container class="mt-5">
            <b-row align-h="between">
                <b-col cols="12" md="7" class="responsive-margin">
                    <p class="text-justify">Notre entreprise vous permet de transformer vos meilleurs souvenirs ou événements en cadeaux personnalisés.
                        Vous pouvez personnaliser plusieurs objets ou créer votre propre album photo.
                    </p>
                    <div class="icon-contact">
                    <b-row no-gutters align-v="center">
                        <font-awesome-icon class="icon-map" cols="1" icon="map-marker-alt" style="font-size:20px; color: #3C618C" />
                         <p cols="5" class="mt-3 ml-2">Adresse : 30 avenue des fleurs, 75120, Paris</p>
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
                        <img src="img/logoentreprise.png" class="w-75 mr-4 mt-4"/>
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
                    <p class="text-justify">Retrouvez nos objets personnalisés aisni que nos albums photo à personnaliser comme vous le souhaitez !!!
                        Allez directement personnaliser votre futur album sur notre site, vous pourrez choisir vos formats de page, vos images, vos textes...
                    </p><p>La création de votre album sera facile et rapide d'utilisation.<br> La même chose est aussi disponible pour nos objets personnalisés.
                Nous proposons des mugs, des cadres photos...
                </p>
                </b-col>
                <b-col cols="12" md="3">
                    <div class="mt-5">
                        <img src="img/produitensemble.png" class="produits mt-3"/>
                        <b-button class="mt-3 button2" to="/creation-album">Creation Album</b-button>
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

    h2{
        color: white;
    }
    .icon-contact{
        line-height: 0.1rem;
    }
    .add{
        background-color: white;
    }
    .responsive-margin{
        margin-left: -67px;
    }
    :hover .button2{
        background-color: #54A3AD;
        border: none;
        border-radius: 10px;
        margin-left: 80px;
    }
    .btn{
        display: inline;
    }
    .produits{
        width: 120%;
    }
    .icon-map{
        margin-left: 4px;
    }
    .title{
        padding-left: 90px;
    }
    @media (max-width: $responsive-tablet) {
        .button2{
            margin-left: 0px;
        }
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
        .produits{
             margin-left: 20px;

         }
        .button2{
            margin-left: 120px;

        }
        #title{
            margin-top: 40px;
        }
        .button2{
            margin-left: 120px;

        }
    }
</style>