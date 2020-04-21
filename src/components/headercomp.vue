<template>
<div class="container" style="max-width:1400px;">
    
<div v-if="$route.name === 'Home'">
<homeheader/>
</div>










<div v-if="$route.name === 'Puntodeventa'">
 <puntoheader/>
</div>
<div v-if="$route.name === 'Precios'">
 <precioheader/>
</div>

<div v-if="$route.name === 'Empresarial'" >
  <empreheader/>

</div>
<div v-if="$route.name === 'Soporte'" >
  <soporteheader/>

</div>

</div>
</template>
<script>
import homeheader from '@/components/home_components/home_header.vue'
import empreheader from '@/components/empresarial_components/empre_header.vue'

import puntoheader from '@/components/punto_components/punto_header.vue'
import precioheader from '@/components/precio_components/precio_header.vue'
import soporteheader from '@/components/soporte_components/soporte_header'

export default {
  name:'headercomp',
  data() {
      return {
        tab: true,
        tab2: false
      }
    },
    components: {
     homeheader,
     puntoheader,
     empreheader,
     precioheader,
     soporteheader


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