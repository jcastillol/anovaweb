<template>
     <div class="container text-center"  style="max-width:800px;">
   <h5  class="card-title text-left" id="tituloa">
     <img src="img/soporte/soporte_iconooperacion.png" >
     Operacion del software</h5>
  <div role="tablist" class="mb-5">
    <b-card no-body class="mb-1">
      <b-card-header header-tag="header" class="p-1" role="tab">
        <b-button block href="#" v-b-toggle.accordion-1 variant="light">Accordion 1</b-button>
      </b-card-header>
      <b-collapse id="accordion-1"  accordion="my-accordion" role="tabpanel">
        <b-card-body>
          <b-card-text>I start opened because <code>visible</code> is <code>true</code></b-card-text>
          <b-card-text></b-card-text>
        </b-card-body>
      </b-collapse>
    </b-card>

    <b-card no-body class="mb-1">
      <b-card-header header-tag="header" class="p-1" role="tab">
        <b-button block href="#" v-b-toggle.accordion-2 variant="light">Accordion 2</b-button>
      </b-card-header>
      <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
        <b-card-body>
          <b-card-text></b-card-text>
        </b-card-body>
      </b-collapse>
    </b-card>

   
  </div>
     </div>
</template>

<script>
  export default {
   name: 'sc4_operacion',
  
  }
</script>