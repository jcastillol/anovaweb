<template>
    <div class="container border-0  bg-transparent" v-if="$route.name === 'Precios'" id="precios" style="max-width:600px;" >

<ul class="nav justify-content-center mb-1 " >
  <li class="nav-item" >
    <a class="nav-link active tab" :class="{tabclick: tab}" @click="activartab()"  href="#">ANOVA punto de venta</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tab" :class="{tabclick: tab2}"  @click="activartab2()"  href="#">ANOVA empresarial </a>
  </li>
</ul>
    <transition name="slide-fade" >

<div class="container text-center"  v-if="tab" style="width:400px;">

<div class="card-group border-0 "    >
  <div class="card border-0 " id="card">
    <img src="img/precios/precio_2.png" class="card-img-top   " alt="...">
    <div class="card-body ">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
   
  </div>
  <div class="card  border-0 b" id="card">
    <img src="img/precios/precio_1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    
  </div>
   
 
 
</div>
<br>
    <img src="img/precios/logos_bancarios.png" alt="...">
</div>
    </transition>
    <transition name="slide-fade2" >


<div class="container text-center  " v-if="tab2">
  

<div class="row row-cols-2 row-cols-md-3 bg-transparent">
    <div class="col mb-4">
      
      <div class="card h-100  border-0" id="card">
               <img src="img/precios/modulos_1.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="tituloc">BAR</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100 border-0" id="card" >
       <img src="img/precios/modulo_2.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="tituloc">CAFETERÍA</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100  border-0" id="card" >
      <img src="img/precios/modulo_3.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="tituloc">ALITAS</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100 border-0" id="card" >
              <img src="img/precios/modulo_4.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="tituloc">FOOD TRUCK</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100  border-0" id="card" >
      <img src="img/precios/modulo_5.png" class="card-img-top" alt="..." >
        <div class="card-body mx-auto">
          <p class="card-text" id="tituloc">MARISCOS</p>        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100  border-0" id="card" >
              <img src="img/precios/modulo_6.png" class="card-img-top" alt="..." >

        <div class="card-body text-center">
          <p class="card-text " id="tituloc">TAQUERÍA</p>        </div>
      </div>
    </div>
  </div>

<br>
    <img src="img/precios/logos_bancarios.png" alt="...">
</div>
  
  </transition>

     </div>

</template>
<script>
export default {
    name: 'precio_header',
     data() {
      return {
        tab: true,
        tab2: false
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