<template>
  <div class="container text-center" style="max-width:800px;">
    <p id="tituloe">Preguntas frecuentes</p>
    <p id="tituloc">SOBRE REQUERIMIENTOS PAGOS Y ENTREGA</p>
    <br />

    <h5 class="card-title text-center text-md-left" id="tituloa">
      <img src="img/precios/preciopv_iconopreguntas.png" />
      Lo que debes saber al adquirir ANOVA
    </h5>
    <div role="tablist" class="mb-5 text-left">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.frecuente-1
            variant="light"
            class="text-left"
          >¿Cuáles son los requerimientos para usar ANOVA?</b-button>
        </b-card-header>
        <b-collapse id="frecuente-1" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>Computadora servidor con Windows 7 en adelante, 32 bits y 64 bits, preferentemente 4 GB de memoria RAM y 120 GB de disco duro.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.frecuente-2
            variant="light"
            class="text-left"
          >¿Después de adquirir anova que sigue?</b-button>
        </b-card-header>
        <b-collapse id="frecuente-2" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>Abre el sistema y sigue el manual de primeros pasos, da de alta productos y abre un turno de venta, la guía de primeros pasos nos llevara a lo más importante para conocer el funcionamiento general del software, pero consulta el manual en la sección de soporte para conocer a detalle todas sus funciones.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.frecuente-3
            variant="light"
            class="text-left"
          >¿Cuánto tarda el envío?</b-button>
        </b-card-header>
        <b-collapse id="frecuente-3" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>Si compraste una caja, paquete de sistema más equipos, o compraste algún hardware el asesor deberá compartirte la guía de envió y el paquete tarda en llegar de 5 a 7 días hábiles.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.frecuente-4
            variant="light"
            class="text-left"
          >¿Cómo es que se instala y como es que se da soporte?</b-button>
        </b-card-header>
        <b-collapse id="frecuente-4" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              El software se instala localmente y utilizamos una herramienta para hacer una conferencia remota
              Y poder apoyarte en el proceso, de la misma manera damos soporte técnico, ingresando a tu computadora remotamente para resolver cualquier problema, si requieres la visita de un técnico, agenda una cita con tu asesor.
            </b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.frecuente-5
            variant="light"
            class="text-left"
          >El software ANOVA ¿Se instala en mi computadora o en la nube?</b-button>
        </b-card-header>
        <b-collapse id="frecuente-5" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>El software se instala localmente, para ser más específicos el sistema se instalara en el disco duro de tu computara, pero vas a necesitar internet para descargar el sistema y para activar tu licencia.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.frecuente-6
            variant="light"
            class="text-left"
          >Que impresoras térmicas son compatibles con ANOVA</b-button>
        </b-card-header>
        <b-collapse id="frecuente-6" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>Cualquier impresora térmica que se pueda instalar a la computadora.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.frecuente-7
            variant="light"
            class="text-left"
          >¿Qué pasa si necesito más equipo para mi restaurante?</b-button>
        </b-card-header>
        <b-collapse id="frecuente-7" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>Nosotros contamos con equipo especializado, podemos apoyarte a identificar cual es el que más se adapta a tus necesidades, contacta con un asesor para que te apoye a buscar la mejor opción.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>
    </div>
  </div>
</template>

<script>
export default {
  name: "prc4_preguntas"
};
</script>