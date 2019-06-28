<template>
  <div class="add">
    <img class="arrow-down" src="img/fleche.png"/>
  <carousel :per-page="1"  class="background-slide">
    <slide class="slide d-flex align-content-center align-items-center">
      <b-container class="">
        <b-row align-v="center" class="margin-slide">
          <b-col cols="3" md="3" align-self="start">
            <div class="produits-losange-home">
              <div class="text-promotion text-center">
                <h4 class="color">-20%</h4>
                <H4>SUR TOUS <br> LES GOODIES</H4>
                Avec le code  <p class="color">Promo&Goodies</p>
              </div>
            </div>
          </b-col>
          <b-col cols="3" md="3" align-self="end" class="text-center">
            <b-button class="button" to="/goodies" >J'en profite</b-button>
          </b-col>
          <b-col cols="3" md="3" align-self="start" class="mb-5">
            <img src="img/goodies.png" class="imagetwo"/>
          </b-col>
        </b-row>
      </b-container>
    </slide>
    <slide class="slide d-flex align-content-center align-items-center ml-5">
      <b-container class="">
        <b-row align-v="center" class="margin-slide">
          <b-col cols="3" md="3" align-self="start">
            <div class="produits-losange-home">
              <div class="text-promotion text-center">
                <h4 class="color">-30%</h4>
                <H4>SUR TOUS <br> LES PRODUITS</H4>
                Avec le code  <p class="color">Promo&Perso</p>
              </div>
            </div>
          </b-col>
          <b-col cols="3" md="3" align-self="end" class="text-center">
            <b-button class="buttoncarousel" to="/album" >J'en profite</b-button>
          </b-col>
          <b-col cols="3" md="3" align-self="start" class="mb-5">
            <img src="img/carousel1.png" class="image"/>
          </b-col>
        </b-row>
      </b-container>
    </slide>

  </carousel>
    <router-link to="/objets-personnalisés"> <h3 class="title mt-5">Retrouver nos produits</h3></router-link>
    <div class="contain-white mt-5">
      <div class="products">
        <div class="flex-column background-image block text-center pt-5">
          <b-link to="/album"><h5>Album Photo</h5></b-link>
          <img src="img/album.png" class="imagethree w-75"/>
        </div>
        <div class="flex-column background-image block text-center  pt-5 ">
          <b-link to="/mugs"><h5>Mugs</h5></b-link>
          <img src="img/mugs.png" class="imagethree w-75"/>
        </div>
        <div class="flex-column background-image block text-center  pt-5 ">
          <b-link to="/calendrier" ><h5>Calendrier</h5></b-link>
          <img src="img/calendrier.png" class="imagethree w-50 mt-3"/>

        </div>
      </div>
      <div class="mt-4 products">
        <div class="flex-column  block text-center pt-5 background-image block-responsive"  style="margin-left: 210px">
          <b-link to="/cadrephoto"><h5>Cadre Photo</h5></b-link>
          <img src="img/cardrephoto.png" class="imagethree w-75 mt-3"/>
        </div>
        <div class="flex-column block text-center pt-5 background-image block-responsive" style="margin-right: 210px">
          <b-link to="/cle-usb"><h5>Cle usb</h5></b-link>
          <img src="img/cleusb.png" class="imagethree pb-5" STYLE="width: 70%"/>
        </div>
      </div>
    </div>
    <router-link to="/entreprise"><h3 class="title mt-5">Notre entreprise</h3></router-link>

    <b-container class="bv-example-row mt-5 pb-5">
    <b-row align-h="between">
      <b-col cols="12" md="7" class="responsive-margin">
        <p class="text-justify">Creative Picture vous permet de transformez vos meilleurs souvenirs ou événement en cadeaux personnalisés.
         Vous pouvez personnalisé plusieur objet ou crée votre propre albums photo.
        </p>
        <p class="strong">Comment ça marche </p>
        <b-container>
        <b-row align-h="start">
          <b-col cols="3" class="text-center">
            <p><font-awesome-icon icon="paper-plane" style="font-size:40px; color: #3C618C" /></p>
            <p>Faite votre choix</p>
          </b-col>
          <b-col cols="3"  class="text-center">
            <p><font-awesome-icon icon="images" style="font-size:40px; color: #3C618C" /></p>
            <p>Ajouter votre touche perso</p>
          </b-col>
          <b-col cols="3" class="text-center">
            <p><font-awesome-icon icon="cart-arrow-down" style="font-size:40px; color: #3C618C" /></p>
            <p>Paiment</p>
          </b-col>
          <b-col cols="3" class="text-center">
            <p><font-awesome-icon icon="truck" style="font-size:40px; color: #3C618C" /></p>
            <p>Livraison</p>
          </b-col>
        </b-row>
        </b-container>
        <b-button class="mt-3 button2" to="/entreprise">En savoir plus</b-button>
      </b-col>
      <b-col cols="12" md="4" class="text-right responsive-entreprise">
        <div class="text-compagny">
          <img src="img/logoentreprise.png" class="w-75 mr-4 mt-4"/>
        </div>
      </b-col>
    </b-row>
    </b-container>

  </div>
</template>

<script>

export default {
  name: 'home',
}
</script>
<style scoped lang="scss">
  $responsive-tablet: 768px;
  $responsive-mobile: 425px;
  @font-face {
    font-family: "GravityBold";
    src: url('../../../public/fonts/Gravity/Gravity-Bold.otf');
  }
  .strong{
    font-family: 'GravityBold';
  }
  .produits-losange-home{
    background-color: white;
    -webkit-transform: rotate(45deg);
    border-radius: 80px;
    height: 230px;
    width: 230px;
  }
  .button, :hover .button {
    background-color: #54A3AD;
    padding-top: 10px;
    border: none;
    width: 190px;
    height: 50px;
    margin-left: 140px;
    border-radius: 12px;
    color: white;
  }
  :hover .buttoncarousel{
    margin-left: 90px;
    background-color: #54A3AD;
    padding-top: 10px;
    border: none;
    width: 190px;
    height: 50px;
    border-radius: 12px;
    color: white;
  }
  :hover .button2{
    background-color: #3C618C;
    border: none;
    width: 130px;
    height: 40px;
    border-radius: 10px;
    color: white;
  }
  :hover button{
    background-color: #3C618C;
  }
  .add{
    background-color: white;
  }
  .margin-slide{
    margin-left: 45px
  }
  :hover a{
    color: black;
  }
  @media (max-width: $responsive-tablet) {
    .contain-white{
      width: 0px;
    }
  }
  @media (max-width: $responsive-mobile) {
    .button, .margin{
      margin-left: -80px;

    }
    .contain-white{
      width: 0px;
    }
  }
</style>