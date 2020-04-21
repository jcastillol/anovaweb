<template>
  <div>
    <h5 class="espacio"></h5>
<sc1_consulta/>
    <h5 class="espacio"></h5>
<sc2_instalacion/>
<br>
<sc3_administracion/>
<br>
<sc4_operacion/>
<br>
<sc5_actualizacion/>
<br>
<sc6_equipo/>
<br>
<sc7_asistencia/>
<br>
<sc8_noencuentras/>
  </div>
</template>
<script>

import sc1_consulta from '@/components/soporte_components/sc1_consulta.vue'
import sc2_instalacion from '@/components/soporte_components/sc2_instalacion.vue'
import sc3_administracion from '@/components/soporte_components/sc3_administracion.vue'
import sc4_operacion from '@/components/soporte_components/sc4_operacion.vue'
import sc5_actualizacion from '@/components/soporte_components/sc5_actualizacion.vue'
import sc6_equipo from '@/components/soporte_components/sc6_equipo.vue'
import sc7_asistencia from '@/components/soporte_components/sc7_asistencia.vue'
import sc8_noencuentras from '@/components/soporte_components/sc8_noencuentras.vue'

export default {
    name: 'soporte',
    components:
    {
        sc1_consulta,
        sc2_instalacion,
        sc3_administracion,
        sc4_operacion,
        sc5_actualizacion,
        sc6_equipo,
        sc7_asistencia,
        sc8_noencuentras

    }
}
</script>