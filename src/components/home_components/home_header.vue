<template>
<div class="container-fluid" id="homeheader">
    <div class="card mb-3 mx-auto bg-transparent border-0 "  style="max-width:1400px">
  <div class="row no-gutters">
   
    <div class="col-lg-6">
      <div class="card-body  text-center text-lg-left bg-transparent ">
         
      
 <p  id="titulohome">  Controlar tu restaurante <br> nunca fue tan fácil</p> 
 <br> 
 <p  id="subtitulohome" >Software inteligente punto de venta para <br> RESTAURANTES, BARES Y CAFETERÍAS</p>     

  <button class="button button1"> <i class="fas fa-play"> </i>  Ver video de ANOVA</button>
   <router-link :to="'prueba_30dias'" id="link2" > <button class="button button2 ml-1 mt-2">
              Prueba gratis 30 dias
      </button></router-link>
 
      </div>
    </div>
     <div class="col-md-6 nomovil ">
      <img src="img/home/home_monitor.png" class="card-img mt-3 " alt="..." >
    </div>
  </div>
</div>
</div>
</template>
<script>
export default {
    name:'home_header'
    }
</script>
<style scoped>
#titulohome
  {
  
  margin-top: 15%;

  }
</style>