<template>
  <div id="app">
  
     <div id="components-layout-demo-basic">
       
    <a-layout>

      <a-layout-content id="header">  
<div class="container">
<nav class="navbar navbar-expand-md navbar-dark ml-4" style="background-color:rgba(255,255,255,0);" id="nav">
  <a class="navbar-brand" href="#"><img src="img/logoo blanco.png" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> ANOVA PUNTO DE VENTA<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ANOVA EMPRESARIAL</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">HARDWARE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PRECIOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SOPORTE</a>
      </li>
        <li class="nav-item">
       <a class="nav-link"> 
   <a-popover placement="bottom">
        <template slot="content">
           <center>
          <span><a-icon type="phone" />(33) 20 14 89 95 </span> </center>
        </template>
              <a-button ghost shape="round"><a-icon type="customer-service" />¡Llamanos!</a-button>
      </a-popover>
       </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"><a-icon size="large" type="export" /> Acceder a ANOVA</a>
      </li>

    </ul>
    
  </div>
</nav>
          </div>

<div class="card-group text-center" >
  <div class="card text-left bg-transparent border-0" >
      <div class="card-header bg-transparent border-0 "></div>
    <div class="card-body ">
   <h5 class="card-title"></h5>
   <ul class="list-group list-group-flush ">
    <li class="list-group-item bg-transparent border-0"> <p class="card-text" id="p1">Controlar tu restaurante nunca fue tan facil</p></li>
    <li class="list-group-item bg-transparent border-0"><p class="card-text" id="p2" >Software inteligente punto de venta para RESTAURANTES, BARES Y CAFETERIAS</p>
</li>
  </ul>
 

   <a-button ghost shape="round" size="large"><a-icon type="customer-service" />¿Como funciona ANOVA?</a-button>
   <a-button type="primary" shape="round" size="large"><a-icon type="customer-service" />Prueba gratis por 30 dias</a-button>

    </div>
  </div>
  <div class="card text-left bg-transparent border-0" >
    <div class="card-body text-left">
      <h5 class="card-title"><img alt="example" style="width:640px;" id="img" src="img/compu2.png"/></h5>
     <p class="card-text"> </p>
    </div>
  </div>
</div>
    <!-- <a-row type="flex" justify="center" align="middle">
     <a-col :span="12">
     <p id="p1"> <a-icon type="ellipsis" />Controlar tu restaurante nunca fue tan facil </p>
     

   
         </a-col>
  <a-col :span="12"><img alt="example" id="img" src="img/compu.png"/></a-col>
    </a-row>
    -->

    
          </a-layout-content>
        <a-layout-content id="body">


        </a-layout-content>
   
      <a-layout-footer>



      </a-layout-footer>
    </a-layout>
     </div>

  </div>
</template>

<script>

const data = [
    {
      title: 'Controlar tu restaurante nunca fue tan facil',
      content: 'contenido'
    },
    {
      title: 'Title 2',
    },
    
  ];

  export default {
    data() {
      return {
        data,
      };
    },
  };
  </script>