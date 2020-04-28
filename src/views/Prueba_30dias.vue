<template>
<div>
<div class="container-fluid" id="accesoheader">
  
 <div class="container text-center">
   <h5 class="espacio"></h5>
      <img src="img/acceso/accesod_logo.png" alt="" srcset="">
      <p id="titulohome">Registrate</p>
      <form>
        <div class="container text-center" id="form">
            <br>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre"> 
        <br>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido"> 
        <br>
        <input type="text" name="usuario" id="Usuario" placeholder="Telefono"> 
        <br>
        <input type="text" name="contraseña" id="contraseña" placeholder="Email"> 
        
        </div>
        <br>
        <button class="button button3" type="submit">Registrarse</button>
      </form>
      <br>
      <br>
       <p id="parrafoc">¿Olvidaste tu contraseña? 
        <router-link :to="'Recuperar_contraseña'" id="link">Acceder a ANOVA</router-link>
        </p>     
     <br>
 </div>
 <div class="container text-center"  style="max-width:1200px">
       <p id="parrafoc">únete a la comunidad de restaurantes inteligentes</p>


  <div class="row row-cols-2 row-cols-lg-5 bg-transparent no-gutters justify-content-center ">
    <div class="col">
     
           <img src="img/home_wingman.png" class="mx-auto mb-4" >
  
    </div>
      <div class="col ">
      
                <img src="img/home_maschurro.png"  class="mx-auto mb-4">
        
      </div>
      <div class="col ">

        <img src="img/home_lamezcalita.png" class="mx-auto mb-4">
      </div>
 
 <div class="col ">

                <img src="img/home_bones.png" class="mx-auto mb-4">
      </div>

      <div class="col ">

                <img src="img/home_hampton.png" class="mx-auto mb-4" >
      </div>

    


      </div>   
 </div>
 </div>
</template>