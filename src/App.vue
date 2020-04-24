<template>
  <div id="app">
 
 
    <header>
           
<div class="container-fluid nomovil"  id="header" :style="{ 'background-image': 'url(img/header/' + $route.name + '.png)' }">
<div class="container " id="nav" style="max-width:1400px"> 
  <b-navbar bg-transparent toggleable="lg" class="px-auto mt-4" type="dark" >
    <b-navbar-brand :to="{name: 'Home'}" ><img src="img/logoo blanco.png"  id="logo"></b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse  id="nav-collapse" is-nav>
      <b-navbar-nav  class="text-center" >
   
        <b-nav-item class="pl-2" :to="{name: 'Puntodeventa'}"  > PUNTO DE VENTA</b-nav-item>
        <b-nav-item  class="pl-2" :to="{name: 'Empresarial' }"> EMPRESARIAL</b-nav-item>
         <b-nav-item class="pl-2" :to="{name: 'Hardware'}" >HARDWARE</b-nav-item>
         <b-nav-item class="pl-2"   :to="{name: 'Precios'}"  >PRECIOS</b-nav-item>
         <b-nav-item class="pl-2" :to="{name: 'Soporte'}" >SOPORTE</b-nav-item>
      
          <b-button pill   size="md" id="buttonwha" variant="light" class="my-2 my-sm-0 ml-3" type="submit">
            <i class="fab fa-whatsapp"></i> ¡Escríbenos! </b-button>
     
        <b-nav-item :to="{name: 'Acceso_anova'}"><i class="fas fa-sign-in-alt pl-3"></i> </b-nav-item>



      </b-navbar-nav>

      
    </b-collapse>
  </b-navbar>

    

           </div> 
             <headercomp> </headercomp>

 </div>
 <div class="simovil">
<div class="container  " id="header" style="background-image:url('img/header/Acceso_anova.png')">
<div class="container " id="nav" style="max-width:1400px"> 
  <b-navbar bg-transparent toggleable="lg" class="px-auto mt-4" type="dark" >
    <b-navbar-brand :to="{name: 'Home'}" ><img src="img/logoo blanco.png"  id="logo"></b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse  id="nav-collapse" is-nav>
      <b-navbar-nav  >
   
        <b-nav-item class="text-center" :to="{name: 'Puntodeventa'}"  > PUNTO DE VENTA</b-nav-item>
        <b-nav-item class="text-center" :to="{name: 'Empresarial' }"> EMPRESARIAL</b-nav-item>
         <b-nav-item class="text-center" :to="{name: 'Hardware'}" >HARDWARE</b-nav-item>
         <b-nav-item  class="text-center" :to="{name: 'Precios'}"  >PRECIOS</b-nav-item>
         <b-nav-item class="text-center" :to="{name: 'Soporte'}" >SOPORTE</b-nav-item>
      
          <b-button pill   size="md" id="buttonwha" variant="light" class="my-2 my-sm-0 ml-3" type="submit">
            <i class="fab fa-whatsapp"></i> ¡Escríbenos! </b-button>
     
        <b-nav-item class="text-center" :to="{name: 'Acceso_anova'}"> <i class="fas fa-sign-in-alt pl-3"></i> Acceder a ANOVA</b-nav-item>



      </b-navbar-nav>

      
    </b-collapse>
  </b-navbar>

    

           </div> 
             <headercomp> </headercomp>

 </div>
 </div>
    </header>
      <router-view />

    <div class="container-fluid"  id="footer" >


            <footercomp></footercomp>

           </div>
     
      </div>
</template>
<script>


import headercomp from '@/components/headercomp.vue'
import footercomp from '@/components/footercomp.vue'


export default {
  name: 'app',

  components:{
    headercomp,
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
 