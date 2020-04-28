<template>
<div class="container-fluid" id="accesoheader">
  
 <div class="container text-center">
   <h5 class="espacio"></h5>
      <img src="img/acceso/accesod_logo.png" alt="" srcset="">
      <p id="titulohome">Bienvenido a <br> ANOVA</p>
            <p id="parrafoc">¿No tienes una cuenta?
                      <router-link :to="'registrarse_anova'" id="link">Crea una</router-link>
               </p>
      <form>
        <div class="container text-center" id="form">
            <br>
            
        <input type="text" name="Usuario" id="Usuario" placeholder="Usuario"> 
        <br>
        <input type="text" name="Contraseña" id="Contraseña" placeholder="Contraseña">
        <br>
        </div>
        <br>
        <button class="button button3" type="submit">Acceder anova</button>
      </form>
      <br>
      <br>
      <p id="parrafoc">¿Olvidaste tu contraseña? 
        <router-link :to="'recuperar_contraseña'" id="link">Recupérala</router-link>
        </p>
     
     <br>
 </div>
 </div>
</template>