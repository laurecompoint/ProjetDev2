<template>
  <div class="add">
    <img class="arrow-down" src="../../assets/img/fleche.png"/>
  <carousel :per-page="1" :navigate-to="test" :mouse-drag="false" class="background-slide">
    <slide class="slide d-flex align-content-center align-items-center ml-5">
      <b-container class="bv-example-row bv-example-row-flex-cols">
        <b-row align-v="center" class="margin-slide">
          <b-col cols="3" md="3" align-self="start">
            <div class="text-promo">
              <div class="text-promotion text-center">
                <h4 class="color">-30%</h4>
                <H4>SUR TOUS <br> LES PRODUITS</H4>
                Avec le code  <p class="color">Promo&Perso</p>
              </div>
            </div>
          </b-col>
          <b-col cols="3" md="3" align-self="end" class="text-center">
            <b-button class="button" to="/album" >J'en profite</b-button>
          </b-col>
          <b-col cols="3" md="3" align-self="start" class="mb-5">
            <img src="../../assets/img/carousel1.png" class="image"/>
          </b-col>
        </b-row>
      </b-container>
    </slide>
    <slide class="slide d-flex align-content-center align-items-center">
      <b-container class="bv-example-row bv-example-row-flex-cols">
        <b-row align-v="center" class="margin-slide">
          <b-col cols="3" md="3" align-self="start">
            <div class="text-promo ">
              <div class="text-promotion text-center">
                <h4 class="color">-20%</h4>
                <H4>SUR TOUS <br> LES GOODIES</H4>
                Avec le code  <p class="color">Promo&Goodies</p>
              </div>
            </div>
          </b-col>
          <b-col cols="3" md="3" align-self="end" class="text-center">
            <b-button class="button" to="/goodies">J'en profite</b-button>
          </b-col>
          <b-col cols="3" md="3" align-self="start" class="mb-5">
            <img src="../../assets/img/goodies.png" class="imagetwo"/>
          </b-col>
        </b-row>
      </b-container>
    </slide>
  </carousel>
    <h3 class="title mt-5">Retrouver nos produits</h3>
    <div class="contain-white mt-5">
      <div class="test">
        <div class="flex-column background-image block text-center pt-5">
          <b-link to="/album"><h5>Album Photo</h5></b-link>
          <img src="../../assets/img/album.png" class="imagethree w-75"/>
        </div>
        <div class="flex-column background-image block text-center  pt-5 ">
          <b-link to="/goodies/mugs"><h5>Mugs</h5></b-link>
          <img src="../../assets/img/mugs.png" class="imagethree w-75"/>
        </div>
        <div class="flex-column background-image block text-center  pt-5 ">
          <b-link to="/goodies/calendrier" ><h5>Calendrier</h5></b-link>
          <img src="../../assets/img/calendrier.png" class="imagethree w-50 mt-3"/>

        </div>
      </div>
      <div class="mt-4 test">
        <div class="flex-column  block text-center pt-5 background-image block-responsive"  style="margin-left: 210px">
          <b-link to="/goodies/cadrephoto"><h5>Cadre Photo</h5></b-link>
          <img src="../../assets/img/cardrephoto.png" class="imagethree w-75 mt-3"/>
        </div>
        <div class="flex-column block text-center pt-5 background-image block-responsive" style="margin-right: 210px">
          <b-link to="/goodies/memorie"><h5>Memorie</h5></b-link>
          <img src="../../assets/img/memory1.png" class="imagethree" STYLE="width: 70%"/>
        </div>
      </div>
    </div>
    <h3 class="title mt-5">Notre entreprise</h3>

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
        <div class="text-entreprise">
          <img src="../../assets/img/logoentreprise.png" class="w-75 mr-4 mt-4"/>
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
    src: url('../../assets/fonts/gravity/Gravity-Bold.otf');
  }
  .background-slide{
    background-image: url("../../assets/img/fondcarousel.png");
    background-size: 1500px;
    height: 550px;
  }
  .text-promo, .text-entreprise{
    height: 230px;
    width: 230px;
    background: white;
    -webkit-transform: rotate(45deg);
    border-radius: 80px;

  }
  .text-promotion{
    -webkit-transform: rotate(-45deg);
    margin-right: 40px;
    padding-top: 40px
  }
  .text-entreprise{
    background-color: #6C8EAD;
    margin-left: 185px;
  }
  .slide{
    min-height: 450px;
  }
  .image{
    width: 190%;
  }
  .button, :hover .button {
    background-color: #54A3AD;
    padding-top: 10px;
    border: none;
    width: 190px;
    height: 50px;
    border-radius: 12px;
    margin-left: 80px;
  }
  .title{
    padding-left: 90px;
  }
  .contain-white{
    width: 1250px;
    margin: auto;
  }
  .background-image{
    background-image: url("../../assets/img/fondimage.png");
    background-size: 410px;
  }
  .block{
    width: 400px;
  }
  .test{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }
  H5{
    color: black;
  }
  :hover link{
    text-decoration: none;
  }
  .arrow-down{
    position: absolute;
    top: 1700px;
    left: 88px;
    width: 45%;
  }
  .button2{
    background-color: #3C618C;
    border: none;
    width: 130px;
    height: 40px;
    border-radius: 10px;
  }
  :hover button{
    background-color: #3C618C;
  }
  .strong{
    font-family: 'GravityBold';
  }
  .color{
    color: #3C618C;
  }
  .responsive-margin{
    margin-left: -67px
  }
  .add{
    background-color: white;
  }
  .imagetwo{
    width: 400px;
  }
  .imagethree{
    margin: auto;
  }
  .margin-slide{
    margin-left: 45px
  }
  @media (max-width: $responsive-tablet) {
    .test{
      flex-direction: column;
      align-items: center;
    }
    .block-responsive{
      margin-left: 200px;
      margin-right: 220px;
    }
    .contain-white{
      width: 0px;
    }
    .block{
      margin-top: 10px;
    }
    .responsive-entreprise{
      display: none;
    }
    .responsive-margin{
      margin-left: 40px;
      width: 500px;
    }
    .arrow-down{
      position: absolute;
      top: 2595px;
      left: 88px;
      width: 45%;
    }
    .imagetwo{
      width: 330px;
    }

  }
  @media (max-width: $responsive-mobile) {
    .button, .margin{
      margin-left: -80px;

    }
    .responsive-margin{
      margin-left: 0px;
      width: 500px;
    }
    .test{
      flex-direction: column;
      align-items: center;
    }
    .block{
      margin-top: 10px;
      margin-left: -20px;
    }
    .title{
      padding-left: 15px;
    }
    .contain-white{
      width: 0px;
    }
    .block-responsive{
      margin-left: 200px;
      margin-right: 220px;
    }
    .arrow-down{
      position: absolute;
      top: 2585px;
      left: 15px;
      width: 93%;
    }
    .image{
      position: absolute;
      top: -120px;
      LEFT: -315px;
      WIDTH: 251px;
    }
    .imagetwo{
      position: absolute;
      top: -109px;
      LEFT: -315px;
      WIDTH: 251px;
    }

  }
</style>