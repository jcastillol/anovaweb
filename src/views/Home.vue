<template>
  <div class="home">
    <home_header/>
                   <h5 class="espacio"></h5>

<hc1_visualiza/>
               <h5 class="espacio"></h5>
<hc2_restaurantes/>
               <h5 class="espacio"></h5>

<hc3_porque/>
               <h5 class="espacio"></h5>


<hc4_software/>
               <h5 class="espacio"></h5>


<hc5_soporte/>
               <h5 class="espacio"></h5>

<hc6_preguntas/>
               <h5 class="espacio"></h5>
               <h5 class="espacio"></h5>

<hc7_procesos/>

               <h5 class="espacio"></h5>


  </div>
</template>

<script>

import home_header from '@/components/home_components/home_header.vue'

import hc1_visualiza from '@/components/home_components/hc1_visualiza.vue'
import hc2_restaurantes from '@/components/home_components/hc2_restaurantes.vue'
import hc3_porque from '@/components/home_components/hc3_porque.vue'
import hc4_software from '@/components/home_components/hc4_software.vue'
import hc5_soporte from '@/components/home_components/hc5_soporte.vue'
import hc6_preguntas from '@/components/home_components/hc6_preguntas.vue'
import hc7_procesos from '@/components/home_components/hc7_procesos.vue'


export default {
  name: 'Home',
  components: {
    home_header,
    hc1_visualiza,
    hc2_restaurantes,
    hc3_porque,
    hc4_software, 
    hc5_soporte,
    hc6_preguntas,
    hc7_procesos
  }
}


</script>
