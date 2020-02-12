<template>
  <div id="app">
  
     <div id="components-layout-demo-basic" >
       
    <a-layout style="background-color: #fff;" >

      <a-layout-content id="header"  >  
   <div class="container" > 
<nav class="navbar navbar-expand-lg navbar-dark ml-4" style="background-color:rgba(255,255,255,0);" id="nav">
  <a class="navbar-brand " href="#"><img src="img/logoo blanco.png" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">PUNTO DE VENTA<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">EMPRESARIAL</a>
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
<div class="container " style="max-width:1250px;">
<div class="card-group text-center" id="p1">
  <div class="card bg-transparent border-0" >
      <div class="card-header bg-transparent border-0 "></div>
    <div class="card-body align-middle ">
   <h5 class="card-title"></h5>
   <ul class="list-group list-group-flush ">
    <li class="list-group-item bg-transparent border-0 "></li>
        <li class="list-group-item bg-transparent border-0 "></li>
            <li class="list-group-item bg-transparent border-0 "></li>

    <li class="list-group-item bg-transparent border-0 "> <p class="card-text" id="p1">Controlar tu restaurante nunca fue tan facil</p></li>
    <li class="list-group-item bg-transparent border-0"><p class="card-text" id="p2" >Software inteligente punto de venta para RESTAURANTES, BARES Y CAFETERIAS</p>
</li>
  </ul>
 

   <a-button ghost shape="round" size="large"><a-icon type="customer-service" /> ¿Cómo funciona ANOVA?</a-button>
   <a-button type="primary" shape="round" size="large"><a-icon type="customer-service" />Prueba gratis por 30 dias</a-button>

    </div>
  </div>
  <div class="card bg-transparent border-0" >
    <div class="card-body">
      <h5 class="card-title"><img alt="example" style="width:600px;" id="img" src="img/compu2.png"/></h5>
     <p class="card-text"> </p>
    </div>
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
        <a-layout-content id="body"  >
<div class="container" style="justify-content:center;" id="cardsimage">
  
  <table class="table">
    <tr >
      <td class=" bg-transparent border-0" >
        <div class="card mb-3 mx-auto bg-transparent border-0 " style="max-width: 650px;">
  <div class="row no-gutters">
    <div class="col-md-3 ">
      <img src="img/home_1.png" class="card-img mt-3 " alt="..." style="width:164px;">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5  class="card-title text-left" id="tituloa">VISUALIZA LAS FINANZAS</h5>
        <h5  class="card-title text-left" id="titulob">DE TU RESTAURANTE EN TIEMPO REAL</h5>
        <h5  class="card-title text-left" id="tituloc">DASHBOARD WEB</h5>
        <p class="card-text text-left" id="parrafo">Ve un resumen de las finanzas en tiempo real y visualiza como se comportan las ventas por dia y hora</p>

      </div>
    </div>
  </div>
</div></td>
    </tr>
    <tr>
       <td class=" bg-transparent border-0" >
        <div class="card mb-3 mx-auto bg-transparent border-0  " style="max-width: 670px;">
  <div class="row no-gutters">
       <div class="col-md-9">
      <div class="card-body">
        <h5  class="card-title text-right" id="tituloa">CONTROLA TODAS LAS</h5>
        <h5  class="card-title text-right" id="titulob">ENTRADAS Y SALIDAS DE TUS INSUMOS</h5>
        <h5  class="card-title text-right" id="tituloc">CONTROL DE INVENTARIOS</h5>
        <p class="card-text text-right" id="parrafo">¡No te quedes sin producto! ANOVA te avisa cuando es momento de comprar insumos gracias a nuestro algoritmo inteligente.</p>
      </div>
     
    </div>
     <div class="col-md-3 ">
      <img src="img/home_2.png" class="card-img mt-2 " alt="..." style="width:164px;">
    </div>
   
  </div>
</div></td>

    </tr>
    <tr >
      <td class=" bg-transparent border-0" >
        <div class="card mb-3 mx-auto bg-transparent border-0 " style="max-width: 740px;">
  <div class="row no-gutters">
    <div class="col-md-3 ">
      <img src="img/home_3.png" class="card-img mt-3" alt="..." style="width:164px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5  class="card-title text-left" id="tituloa">VALIDA QUE TODAS LAS</h5>
        <h5  class="card-title text-left" id="titulob">TRANSACCIONES DE CAJA SEÁN CORRECTAS </h5>
        <h5  class="card-title text-left" id="tituloc">CORTE DE CAJA</h5>
        <p class="card-text text-left" id="parrafo">Al final del día registra el dinero que tienes en la caja y ANOVA te dirá si te sobra o te falta efectivo</p>
        <p class="card-text" ></p>

      </div>
    </div>
  </div>
</div></td>
    </tr>
  </table>




</div>


        </a-layout-content>



      <a-layout-footer style="background-color:#fff">
        <a-divider></a-divider>
    
  <div class="container" style="max-width:1080px;">

     <div class="card mb-3 mx-auto bg-transparent border-0 " >
  <div class="row no-gutters">
    <div class="col-md-3 ">
      <img src="img/logo_anova_gris.png" class="card-img mx-auto  " alt="..." style="width:164px;">
    </div>
    <div class="col-md-8">
      <div class="card-body ml-4">
        <p class="card-text text-left" id="linkf">Somos una empresa de jóvenes emprendedores de Guadalajara, Jalisco con experiencia en la industria gastronómica que tenemos por objetivo simplificar la administración y aumentar las utilidades de nuestros clientes a través de herramientas tecnológicas.
</p>
        <p class="card-text" ></p>
      </div>
    </div>
  </div>
     </div>
<div class="card-group">
 
  <div class="card border-0">
    <div class="card-body ">
     <p class="card-text" id="titulof">MAPA DE SITIO</p>
     <ul class="list-group list-group-flush  ">
    <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">HOME</p></a>
    </li>
    <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">SOFTWARE</p></a>
    </li>
     <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">HARDWARE</p></a>
    </li>
     <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">PRECIOS</p></a>
    </li>
     <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">SOPORTE</p></a>
    </li>
        
  </ul>
    </div>
  </div>

    <div class="card border-0">
    <div class="card-body">
     <p class="card-text" id="titulof">PROXIMOS PASOS</p>
     <ul class="list-group list-group-flush  ">
    <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">DESCARGAR DEMO</p></a>
    </li>
    <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">SOLICITAR SESIÓN DEMO</p></a>
    </li>
     <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">SOLICITAR COTIZACIÓN</p></a>
    </li>
     <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">COMPRAR ANOVA</p></a>
    </li>
  
        
  </ul>
    </div>
  </div>
    <div class="card border-0">
    <div class="card-body">
     <p class="card-text" id="titulof">CONTACTO</p>
     <ul class="list-group list-group-flush  ">
    <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">ISLOTE 2314, COLONIA VALLE VERDE </p></a>
    </li>
    <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">GUADALAJARA, JALISCO</p></a>
    </li>
     <li class="list-group-item bg-transparent border-0 ">
      <a href="#" ><p class="card-text" id="linkf">ventas@anova.mx</p></a>
    </li>
     
        
  </ul>
    </div>
  </div>

  
</div>
  </div>

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