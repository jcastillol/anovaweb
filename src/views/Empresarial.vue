<template>
 <div>
<br>
<ec1_comofunciona/>
   <h5 class="espacio"></h5>
   <ec2_ventas/>
 </div>
 
</template>

<script>
import ec1_comofunciona from '@/components/empresarial_components/ec1_comofunciona.vue'
import ec2_ventas from '@/components/empresarial_components/ec2_ventas.vue'

  export default {
      name : 'empresarial',
     components:
     {
       ec1_comofunciona,
       ec2_ventas
     }
  }
</script>