<template>
    <div class="container text-center">
<p  id="tituloe">Consulta los siguientes manuales</p>
<br>
    <div class="row row-cols-1 row-cols-lg-3 bg-transparent  justify-content-center">
  <div class="col mb-4">
    <div class="card border-0">
      <img src="img/soporte/soporte_boton1.png" class="mx-auto imgsoporte" alt="..." >
      <div class="mx-auto">
    <button class="button button3">Descargar Primeros Pasos</button>
        <p class="card-text" id="parrafob">
       Encontrarás lo necesario para 
empezar a operar tu  restaurante
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card border-0">
      <img src="img/soporte/soporte_boton2.png" class="mx-auto imgsoporte" alt="..." >
      <div class=" mx-auto">
    <button class="button button3">Descargar paquetes <br> y promociones</button>
        <p class="card-text" id="parrafob">
        Sabrás gestionar los 
modificadores, con o sin 
seguimiento en inventario.
           </p>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card border-0">
      <img src="img/soporte/soporte_boton3.png" class="mx-auto imgsoporte" alt="..." >
      <div class=" mx-auto">
    <button class="button button3">Descargar Inventarios</button>
        <p class="card-text" id="parrafob">
        Conocerás como tener bajo
 control tu inventario, desde como agregar un insumo,  compras.
           </p>
      </div>
    </div>
  </div>
</div>
    </div>
</template>
<script>
export default {
    name: 'sc1_consulta'
}
</script>
<style scoped>
.button
{
width:300px
}
#parrafob
{
  margin-top: 5%;
}
</style>