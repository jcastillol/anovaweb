<template>
<div class="container-fluid" id="preciosheader">
<br>
 
    <div class="container text-center border-0  bg-transparent nomovil"   >
<h5  id="titulohome"><img src="img/play.png" >
 Planes que se ajustan a tus necesidades
         </h5>
<h5  id="parrafoc" >Puedes utilizar nuestra versión de prueba GRATIS durante 30 días antes de elegir un plan</h5>     

<ul class="nav justify-content-center  " >

  <li class="nav-item" >
    <a class="nav-link active tab" :class="{tabclick: tab}" @click="activartab()"  href="#">ANOVA<br> Punto de venta</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tab" :class="{tabclick: tab2}"  @click="activartab2()"  href="#">ANOVA <br> Empresarial </a>
  </li>
</ul>
<br>


<div class="container text-center"  v-if="tab" style="max-width:400px; height:600px">

<div class="card-group border-0 "    >
  <div class="card border-0 " id="cardprecios1">
    <img src="img/precios/precio_2.png" class="card-img-top   " alt="...">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  </div>
  <div class="card  border-0 " id="cardprecios2">
    <img src="img/precios/precio_1.png" class="card-img-top" alt="...">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
  </div>
   
 
 
</div>
<br>
<br>
<br>

    <img src="img/precios/logos_bancarios.png" alt="..." class="card-img" style="max-width:267px">
</div>


<div class="container text-center  " v-if="tab2" style="max-width:800px; height:600px">
  

<div class="row row-cols-2 row-cols-md-3 bg-transparent" >
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">        
        <img src="img/precios/modulos_1.png" class="card-img-top " alt="..." >

          <div class="card-header bg-primary">Header</div>
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <!-- <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      
      <div class="card border-0 " id="card">
        <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
          <p  id="parrafoa">Visualiza la centralización de ventas
entre sucursales</p>        </div>
    </div>
    <div class="col mb-4">
      <div class="card  border-0" id="card" >
       <img src="img/precios/modulo_2.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="parrafoc">Observa estados financieros y centraliza
tus cuentas por pagar entre otros</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card  border-0" id="card" >
      <img src="img/precios/modulo_3.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="parrafoc">Vigila desde recetas hasta la
distribucion en puntos de ventas</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card  border-0" id="card" >
              <img src="img/precios/modulo_4.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="parrafoc">Lleva un seguimiento completo y 
preciso de todos tus empleados</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card  border-0" id="card" >
      <img src="img/precios/modulo_5.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="parrafoc">Asegura la calidad y conciencia 
de tu marca</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card  border-0" id="card" >
              <img src="img/precios/modulo_6.png" class="card-img-top" alt="..." >

        <div class="card-body text-center">
          <p class="card-text " id="parrafoc">Planifica las actividades y recursos
de las tareas en nuevas aperturas</p>        </div>
      </div>
    </div> -->
  </div>

<br>
<br>
<br>

    <img src="img/precios/logos_bancarios.png" alt="..." class="card-img" style="max-width:267px">
</div>
  

     </div>


   <!-- versionmovil -->


<div class="container text-center simovil">

<select v-model="selected">
        <option disabled value="">Escoge tu plan</option>
        <option>Anova Punto de venta</option>
        <option>Anova Empresarial</option>
      </select>

</div>


</div>
</template>
<script>

export default {
    name: 'precios_header',
     data() {
      return {
        tab: true,
        tab2: false,
        selected: ''

      }
    },
    methods: {

      activartab(){
       
          this.tab= true
          this.tab2=false

     
     },
      activartab2(){
       
          this.tab2= true
          this.tab=false

     
      }
      
    },
}
</script>
<style scoped>
.slide-fade-enter {
      transform: translateX(10px);
      opacity: 0;
    }
    
    .slide-fade-enter-active
    {
     transition: all 0.8s ease;

    }
    .slide-fade-leave-active {
      transition: all 0.4s ease;
    }
    
    .slide-fade-leave-to {
      transform: translateX(-10px);
      opacity: 0;
    }

.slide-fade2-enter {
      transform: translateX(10px);
      opacity: 0;
    }
    
    .slide-fade2-enter-active{
      transition: all 1s ease;
    }
    .slide-fade2-leave-active {
      transition: all 0.3s ease;
    }
    
    .slide-fade2-leave-to {
      transform: translateX(-10px);
      opacity: 0;
    }
</style>