<template>
<div class="container-fluid" id="accesoheader">
  
 <div class="container text-center">
   <h5 class="espacio"></h5>
      <img src="img/acceso/accesod_logo.png" alt="" srcset="">
      <p id="titulohome">Regístrate</p>
      <form>
        <div class="container text-center" id="form">
            <br>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre"> 
        <br>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido"> 
        <br>
        <input type="text" name="usuario" id="Usuario" placeholder="Usuario"> 
        <br>
        <input type="text" name="contraseña" id="contraseña" placeholder="Contraseña"> 
        <br>
        <input type="text" name="confirmarntraseña" id="confirmarntraseña" placeholder="Confirmar Contraseña">
        <br>
        <br>
        </div>
        <br>
        <button class="button button3" type="submit">Registrarse</button>
      </form>
     
      <br>
       <p id="parrafoc">¿Olvidaste tu contraseña? 
        <a href="/recuperar_contraseña"  id="link">Recupérala</a>
        </p>     
     <br>
 </div>
 </div>
</template>