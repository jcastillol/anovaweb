<template>
  <div id="app">
 
 
    <header>
           
<div class="container-fluid fixed-top"  id="nav" >
  <b-navbar bg-transparent toggleable="lg" class="px-auto mt-4" type="dark" >
    <b-navbar-brand href="/" ><img src="img/logoo blanco.png"  id="logo"></b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse  id="nav-collapse" is-nav>
      <b-navbar-nav  class="text-center" >
   
        <b-nav-item class="pl-2" href="/puntodeventa"> PUNTO DE VENTA</b-nav-item>
        <b-nav-item  class="pl-2" href="/empresarial" > EMPRESARIAL</b-nav-item>
         <b-nav-item class="pl-2" href="/hardware"   >HARDWARE</b-nav-item>
         <b-nav-item class="pl-2"  href="/precios"  >PRECIOS</b-nav-item>
         <b-nav-item class="pl-2" href="/soporte"  >SOPORTE</b-nav-item>
      
          <b-button pill   size="md" id="buttonwha" variant="light" class="my-2 my-sm-0 ml-3" type="submit">
            <i class="fab fa-whatsapp"></i> ¡Escríbenos! </b-button>
     
        <b-nav-item class="pl-2" href="/accesoanova"> <img src="img/home_iconoacceder.png" id="iconoacceder"></b-nav-item>



      </b-navbar-nav>

      
    </b-collapse>
  </b-navbar>
           </div> 
    </header>


      <router-view />

    <div class="container-fluid"  id="footer" >


            <footercomp></footercomp>

           </div>
     
      </div>
</template>
<script>
var widthscreen = screen.availWidth;
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos ) {
        if (widthscreen > 1000){

    document.getElementById("nav").style.top = "0";
   document.getElementById("nav").style.backgroundImage = "initial";
        }
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
              if (widthscreen > 1000){

            document.getElementById("nav").style.backgroundImage = "linear-gradient(to right, #2dbff9 , #6607e0 )";
              }
              else{
                document.getElementById("nav").style.backgroundImage = "linear-gradient(to left, #2dbff9 , #6607e0 )";
              }
    
    }

  } else {
    if (widthscreen > 1000){
    document.getElementById("nav").style.top = "-120px";
    }

  }
  prevScrollpos = currentScrollPos;
}
import footercomp from '@/components/footercomp.vue'


export default {
  name: 'app',

  components:{
    footercomp

  }

  }
  
  
</script>
<style scoped>
.slide-fade-enter {
      transform: translateX(10px);
      opacity: 0;
    }
    
    .slide-fade-enter-active,
    .slide-fade-leave-active {
      transition: all 0.2s ease;
    }
    
    .slide-fade-leave-to {
      transform: translateX(-10px);
      opacity: 0;
    }
</style>
 