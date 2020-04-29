<template>
  <div class="container text-center" style="max-width:800px;">
    <h5 class="card-title text-left" id="tituloa">
      <img src="img/soporte/soporte_iconoasistencia.png" />
      Asistencia Técnica
    </h5>
    <div role="tablist" class="mb-5 text-left">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.asistencia-1
            variant="light"
            class="text-left"
          >¿Qué pasa con mis datos si mi computadora se descompone?</b-button>
        </b-card-header>
        <b-collapse id="asistencia-1" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>ANOVA no genera un respaldo automático de tu base de datos si quieres estar siempre protegido, solicita un respaldo periódico con tu asesor, en caso de que tu computadora fallará puedes contactarte con nosotros y te instalamos tu base de datos anterior en tu computadora nueva.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.asistencia-2
            variant="light"
            class="text-left"
          >Tengo ideas sobre cómo mejorar el sistema ¿a quién se las digo?</b-button>
        </b-card-header>
        <b-collapse id="asistencia-2" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>Envíanos un correo soporte@anova.mx y con gusto atenderemos tu solicitud, apreciamos toda la retroalimentación que puedas darnos sobre el sistema ya que nuestro objetivo es brindarte una herramienta completa que te facilite la administración y toma de decisiones en tu negocio, también si tienes necesidades específicas para tu establecimiento nos las puedes mencionar y veremos cómo podemos apoyarte a que el sistema se acople a lo que tu requieres.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>
    </div>
  </div>
</template>

<script>
export default {
  name: "sc7_asistencia"
};
</script>