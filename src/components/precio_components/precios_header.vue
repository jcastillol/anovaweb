<template>
  <div class="container-fluid" id="preciosheader">
   
    <div class="container text-center border-0 bg-transparent nomovil">
       <br />
  <br />
      <h5 id="titulohome">
        <img src="img/play.png" />
        Planes que se ajustan a tus necesidades
      </h5>
      <h5
        id="parrafob"
      >Puedes utilizar nuestra versión de prueba GRATIS durante 30 días antes de elegir un plan</h5>
      <br/>
      <br/>

      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active tab" :class="{tabclick: tab}" @click="activartab()" href="#">
            ANOVA
            <br />Punto de venta
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link tab" :class="{tabclick: tab2}" @click="activartab2()" href="#">
            ANOVA
            <br />Empresarial
          </a>
        </li>
      </ul>
      <br />

      <div class="container text-center" v-if="tab" style="max-width:500px; height:600px">
        <div class="card-group border-0">
          <div class="card border-0" id="cardprecios1">
            <img src="img/precios/precio_planbasico.png" class="card-img-top" alt="..." />
            <ul class="text-left nostyle">
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Usuarios Ilimitados
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Comandero
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Cobro rápido
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Cortes de caja
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Compras a Proveedores
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Asistente de inventarios
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Dashboard Financiero
              </li>
            </ul>
            <br />
            <br />
            
            <p id="tituloc">
              $450 mxn
              <br />Mensuales
            </p>
          </div>
          <div class="card border-0" id="cardprecios2">
            <img src="img/precios/precio_planri.png" class="card-img-top" alt="..." />
            <ul class="text-left nostyle">
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Usuarios Ilimitados
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Comandero
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Cobro rápido
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Cortes de caja
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Compras a Proveedores
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Asistente de inventarios
              </li>
              <li>
                <img src="img/precios/precio_iconodone.png" class="imglista" /> Dashboard Financiero
              </li>
              <li>
                <img src="img/precios/precio_iconostar.png" class="imglista" /> Modulo servicio a domicilio
              </li>
              <li>
                <img src="img/precios/precio_iconostar.png" class="imglista" /> Modulo facturación
              </li>
              <li>
                <img src="img/precios/precio_iconostar.png" class="imglista" /> Web Dashboard
              </li>
            </ul>
            <p id="tituloc">
              $750 mxn
              <br />Mensuales
            </p>
          </div>
        </div>
<br/>
        <img
          src="img/precios/logos_bancarios.png"
          alt="..."
          class="card-img"
          style="max-width:267px"
        />
      </div>

      <div class="container text-center" v-if="tab2" style="max-width:800px; height:600px">
        <div class="row row-cols-2 row-cols-md-3 bg-transparent">
          <div class="col mb-4">
            <div class="card border-0" id="card">
              <img src="img/precios/precio_moduloventas.png" class="card-img-top" alt="..." />
              <p id="parrafoc">
                Visualiza la centralización de ventas
                entre sucursales
              </p>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-0" id="card">
              <img src="img/precios/precio_modulofinanzas.png" class="card-img-top" alt="..." />
              <p class="card-text" id="parrafoc">
                Observa estados financieros y centraliza
                tus cuentas por pagar entre otros
              </p>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-0" id="card">
              <img src="img/precios/precio_modulooperaciones.png" class="card-img-top" alt="..." />
              <p class="card-text" id="parrafoc">
                Vigila desde recetas hasta la
                distribucion en puntos de ventas
              </p>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-0" id="card">
              <img src="img/precios/precio_modulocapital.png" class="card-img-top" alt="..." />
              <p class="card-text" id="parrafoc">
                Lleva un seguimiento completo y
                preciso de todos tus empleados
              </p>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-0" id="card">
              <img src="img/precios/precio_moduloauditoria.png" class="card-img-top" alt="..." />
              <p class="card-text" id="parrafoc">
                Asegura la calidad y conciencia
                de tu marca
              </p>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-0" id="card">
              <img src="img/precios/precio_modulogestion.png" class="card-img-top" alt="..." />

              <p class="card-text" id="parrafoc">
                Planifica las actividades y recursos
                de las tareas en nuevas aperturas
              </p>
            </div>
          </div>
        </div>

        <br />
  
        <img
          src="img/precios/logos_bancarios.png"
          alt="..."
          class="card-img"
          style="max-width:267px"
        />
      </div>
    </div>

    <!-- versionmovil -->

    <div class="container-fluid text-center simovil" >
      <br />
      <br />
      <select v-model="selected">
        <option disabled value>Escoge tu plan</option>
        <option>ANOVA Punto de venta</option>
        <option>ANOVA Empresarial</option>
      </select>
      <br />
      <br />
      <div class="container text-center" style="max-width:500px ">
        <carousel
          :autoplay="false"
          :nav="false"
         
          :responsive="{0:{items:1},410:{items:1, stagePadding:50},578:{items:2}}"
          v-if="selected === '' || selected === 'ANOVA Punto de venta'"
        >
          <div class="card border-0" id="cardprecios1">
            <img src="img/precios/precio_planbasico.png" class="card-img-top" alt="..." />
            <br />
                       <br>
   
            <ul class="circle text-left">
              <li>Usuarios Ilimitados</li>
              <li>Comandero</li>
              <li>Cobro rápido</li>
              <li>Cortes de caja</li>
              <li>Compras a Proveedores</li>
              <li>Asistente de inventarios</li>
              <li>Dashboard Financiero</li>
            </ul>
            <br>
            <p id="tituloc">
              $450 mxn
              <br />Mensuales
            </p>
          </div>
          <div class="card border-0" id="cardprecios2">
            <img src="img/precios/precio_planri.png" class="card-img-top" alt="..." />
            <ul class="circle text-left">
              <li>Usuarios Ilimitados</li>
              <li>Comandero</li>
              <li>Cobro rápido</li>
              <li>Cortes de caja</li>
              <li>Compras a Proveedores</li>
              <li>Asistente de inventarios</li>
              <li>Dashboard Financiero</li>
              <li class="negrita">Modulo servicio a domicilio</li>
              <li class="negrita">Modulo facturación</li>
              <li class="negrita">Web Dashboard</li>
            </ul>
            <p id="tituloc">
              $750 mxn
              <br />Mensuales
            </p>
          </div>
        </carousel>
      </div>
      <div class="container text-center" style="max-width:600px">
        <carousel
          :autoplay="false"
          :nav="false"
          
          :responsive="{0:{items:1,margin:10},410:{items:1, stagePadding:50,margin:10},578:{items:2,margin:10}}"
          v-if="selected === 'ANOVA Empresarial'"
        >
          <div class="card border-0" id="card">
            <img src="img/precios/precio_moduloventas.png" class="card-img-top" alt="..." />
            <p id="parrafoc">
              Visualiza la centralización de ventas
              entre sucursales
            </p>
          </div>

          <div class="card border-0" id="card">
            <img src="img/precios/precio_modulofinanzas.png" class="card-img-top" alt="..." />
            <p id="parrafoc">
              Observa estados financieros y centraliza
              tus cuentas por pagar entre otros
            </p>
          </div>

          <div class="card border-0" id="card">
            <img src="img/precios/precio_modulooperaciones.png" class="card-img-top" alt="..." />
            <p id="parrafoc">
              Vigila desde recetas hasta la
              distribucion en puntos de ventas
            </p>
          </div>

          <div class="card border-0" id="card">
            <img src="img/precios/precio_modulocapital.png" class="card-img-top" alt="..." />
            <p class="card-text" id="parrafoc">
              Lleva un seguimiento completo y
              preciso de todos tus empleados
            </p>
          </div>

          <div class="card border-0" id="card">
            <img src="img/precios/precio_moduloauditoria.png" class="card-img-top" alt="..." />
            <p class="card-text" id="parrafoc">
              Asegura la calidad y conciencia
              de tu marca
            </p>
          </div>

          <div class="card border-0" id="card">
            <img src="img/precios/precio_modulogestion.png" class="card-img-top" alt="..." />
            <p class="card-text" id="parrafoc">
              Planifica las actividades y recursos
              de las tareas en nuevas aperturas
            </p>
          </div>
        </carousel>
      </div>
      <img src="img/precios/logos_bancarios.png" alt="..." class="card-img" style="max-width:267px" />
    </div>
  </div>
</template>
<script>
import carousel from "vue-owl-carousel";

export default {
  name: "precios_header",
  data() {
    return {
      tab: true,
      tab2: false,
      selected: ""
    };
  },
  components: { carousel },
  methods: {
    activartab() {
      this.tab = true;
      this.tab2 = false;
    },
    activartab2() {
      this.tab2 = true;
      this.tab = false;
    }
  }
};
</script>
<style scoped>
.slide-fade-enter {
  transform: translateX(10px);
  opacity: 0;
}

.slide-fade-enter-active {
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

.slide-fade2-enter-active {
  transition: all 1s ease;
}
.slide-fade2-leave-active {
  transition: all 0.3s ease;
}

.slide-fade2-leave-to {
  transform: translateX(-10px);
  opacity: 0;
}
#parrafob
{
 color:white;
}
#parrafoc
{
    margin: 5%;
    font-size: min(4.65vw,14px); 
    line-height: 1.2;

}
</style>