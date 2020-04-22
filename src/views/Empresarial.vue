<template>
 <div>
<br>
<ec1_comofunciona/>
   <h5 class="espacio"></h5>
   <ec2_ventas/>
   <h5 class="espacio"></h5>
   <ec3_finanzas/>
   <h5 class="espacio"></h5>
   <ec4_operaciones/>
     <h5 class="espacio"></h5>
   <ec5_capitalhumano/>
    <h5 class="espacio"></h5>
   <ec6_auditoria/>
  
      <h5 class="espacio"></h5>
   <ec7_gestion/>
    <h5 class="espacio"></h5>
   <ec8_cotizacion/>
 </div>
 
</template>

<script>
import ec1_comofunciona from '@/components/empresarial_components/ec1_comofunciona.vue'
import ec2_ventas from '@/components/empresarial_components/ec2_ventas.vue'
import ec3_finanzas from '@/components/empresarial_components/ec3_finanzas.vue'
import ec4_operaciones from '@/components/empresarial_components/ec4_operaciones.vue'
import ec5_capitalhumano from '@/components/empresarial_components/ec5_capitalhumano.vue'
import ec6_auditoria from '@/components/empresarial_components/ec6_auditoria.vue'
import ec7_gestion from '@/components/empresarial_components/ec7_gestion.vue'
import ec8_cotizacion from '@/components/empresarial_components/ec8_cotizacion.vue'

  export default {
      name : 'empresarial',
     components:
     {
       ec1_comofunciona,
       ec2_ventas,
       ec3_finanzas,
       ec4_operaciones,
       ec5_capitalhumano,
       ec6_auditoria,
       ec7_gestion,
       ec8_cotizacion
     }
  }
</script>