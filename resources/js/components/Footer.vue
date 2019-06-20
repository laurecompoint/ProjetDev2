<template>
  <div class="footer">
      <b-row align-h="around" class="m-auto pt-3">
        <b-col sm="5" md="3" class="footerlink">
          <p >Nos produits :</p>
          <b-link to="/album" class="link">Album</b-link> <br>
          <b-link to="/goodies" class="link">Object</b-link>
        </b-col>
        <b-col sm="5" md="3" class="text-center">
          <p class="text-footer">Besoin d'aide ?</p>
          <b-link to="/faq-contact" class="link">FAQ</b-link> <br>
          <b-link to="/faq-contact" class="link">Nous contacter</b-link>
        </b-col>
        <b-col sm="5" offset-sm="2" md="3" offset-md="0" class="footerlink" id="us">
          <p class="text-footer">Qui somme nous ?</p>
          <b-link to="/entreprise" class="link">Entreprise</b-link> <br>
          <b-link  to="/mention-legal" class="link">Mention Légale</b-link>
        </b-col>
      </b-row>
      <b-row align-h="between" class="container-fluid m-auto pt-3">
        <b-col sm="5" md="3" >
          <p class="mt-3 icon">© 2019 CreativePicture</p>
        </b-col>
        <b-col sm="5" offset-sm="2" md="3" offset-md="0"  class="link-icon">
          <b-row cols="4" class="mt-3 " align-h="around">
            <b-link cols="4" class="test" href="https://www.messenger.com/"><font-awesome-icon class="fa-2x iconsociaux" :icon="['fab', 'facebook-messenger']"/></b-link>
            <b-link cols="4" href="https://www.instagram.com/?hl=fr"><font-awesome-icon class="fa-2x iconsociaux" :icon="['fab', 'instagram']"/></b-link>
            <b-link cols="4" href="https://fr-fr.facebook.com/"><font-awesome-icon class="fa-2x iconsociaux" :icon="['fab', 'facebook']"/></b-link>
            <b-link cols="4" href="https://twitter.com/cvostfr"><font-awesome-icon class="fa-2x iconsociaux" :icon="['fab', 'twitter']"/></b-link>
          </b-row>
        </b-col>

      </b-row>

  </div>
</template>

<script>
export default {
  name: 'HelloWorld',

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style  lang="scss">
  $responsive-tablet: 768px;
  $responsive-mobile: 425px;
  .footer{
    background-color: #6C8EAD;
    color: white;
  }
    a, i, link, .iconsociaux{
    color: white;
    }
  .button-login-register{
    background-color: #3C618C;
    border: none;
    width: 130px;
    height: 40px;
    border-radius: 10px;
  }
  .link{
    color: white;
  }
  :hover .link {
    color: white;
    text-decoration: none;
  }
  .textright{
    text-align: right;
  }
  .icon{
    margin-left: 42px;
  }
  .line{
    background-color: #3D628D;
    height: 15px;
  }
  .test{
    margin-left: 10px;
  }
  .link-icon{
    margin-left: 200px;
  }
  .text-align{
    margin-left: 11px;
  }
  #us{
    text-align: right;
  }

  @media (max-width: $responsive-mobile) {
    .text-align{
      margin-left: 0px;
    }
    .link-icon{
      margin-left: 0px;
    }
    .footerlink, #us{
      text-align: center;
    }
    .text-align{
      margin-left: 0px;
      text-align: center;
    }
    .text-footer{
      margin-top: 10px;
    }
  }
  @media (max-width: $responsive-tablet) {
    .text-align{
      margin-left: -50px;
    }
    .icon{
      margin-left: 0px;
    }
    .link-icon{
      margin-left: 0px;
    }
  }

</style>
