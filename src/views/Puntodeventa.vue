<template>
<div>
<h5 class="espacio"></h5>

<pc1_analiza></pc1_analiza>
<h5 class="espacio"></h5>
<h5 class="espacio"></h5>

<pc2_protege></pc2_protege>
<h5 class="espacio"></h5>
<h5 class="espacio"></h5>

<pc3_agiliza></pc3_agiliza>
<h5 class="espacio"></h5>
<h5 class="espacio"></h5>

<pc4_facturas/>
<h5 class="espacio"></h5>
<h5 class="espacio"></h5>

<pc5_tuinfo></pc5_tuinfo>
<h5 class="espacio"></h5>
<h5 class="espacio"></h5>

<pc6_reportes></pc6_reportes>
<h5 class="espacio"></h5>
<h5 class="espacio"></h5>

<pc7_mejora></pc7_mejora>

<h5 class="espacio"></h5>


</div>
</template>
<script>

import pc1_analiza from '@/components/punto_components/pc1_analiza.vue'
import pc2_protege from '@/components/punto_components/pc2_protege.vue'
import pc3_agiliza from '@/components/punto_components/pc3_agiliza.vue'
import pc4_facturas from '@/components/punto_components/pc4_facturas.vue'
import pc5_tuinfo from '@/components/punto_components/pc5_tuinfo.vue'
import pc6_reportes from '@/components/punto_components/pc6_reportes.vue'
import pc7_mejora from '@/components/punto_components/pc7_mejora.vue'




export default {
  name: 'Puntodeventa',
  components: {
    pc1_analiza,
    pc2_protege,
    pc3_agiliza,
    pc4_facturas,
    pc5_tuinfo,
    pc6_reportes,
    pc7_mejora

  }
 
}


</script>
