<template>
    <div>
      <br>
<br>
<br>
<prc1_nuevo> </prc1_nuevo>
<br>
<br>
<br>
<prc2_incluido> </prc2_incluido>
<br>
<br>
<br>
<prc3_packcompleto> </prc3_packcompleto>
<br>
<br>
<br>
<prc4_preguntas> </prc4_preguntas>
<br>
<br>
<br>

<hc6_preguntas/>
<br>

    </div>   
</template>
<script>

import prc1_nuevo from '@/components/precio_components/prc1_nuevo.vue'
import prc2_incluido from '@/components/precio_components/prc2_incluido.vue'
import prc3_packcompleto from '@/components/precio_components/prc3_packcompleto.vue'
import prc4_preguntas from '@/components/precio_components/prc4_preguntas.vue'
import hc6_preguntas from '@/components/home_components/hc6_preguntas.vue'


export default {
  name: 'Precio',
  components: {
     prc1_nuevo,
     prc2_incluido,
     prc3_packcompleto,
     prc4_preguntas,
     hc6_preguntas
 
  }
 
}


</script>
