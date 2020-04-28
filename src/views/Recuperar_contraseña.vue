<template>
<div class="container-fluid" id="accesoheader">
  
 <div class="container text-center">
   <h5 class="espacio"></h5>
      <img src="img/acceso/accesod_logo.png" alt="" srcset="">
      <p id="titulohome">Recupera tu contraseña</p>
      <form>
        <div class="container text-center" id="form">
            <br>
        <input type="text" name="usuario" id="Usuario" placeholder="Usuario"> 
        <br>
        </div>
        <br>
        <button class="button button3" type="submit">Recuperar Contraseña</button>
      </form>
      <br>
      <br>
          <p id="parrafoc">¿No tienes una cuenta?
                      <router-link :to="'registrarse_contraseña'" id="link">Crea una</router-link>
               </p>     
     <br>
 </div>
 </div>
</template>