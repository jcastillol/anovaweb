<template>
  <div class="container text-center" style="max-width:800px;">
    <h5 class="card-title text-left" id="tituloa">
      <img src="img/soporte/soporte_iconoequipo.png" />
      Equipo de punto de venta
    </h5>
    <div role="tablist" class="mb-5 text-left">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.equipo-1
            variant="light"
            class="text-left"
          >¿Si me llegará a fallar mi equipo de punto de venta, me pueden ayudar?</b-button>
        </b-card-header>
        <b-collapse id="equipo-1" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              Sí, tenemos un equipo de soporte capacitado para resolver de forma remota o presencial cualquier inconveniente que le llegará a ocurrir a tu equipo, red o sistema, el diagnostico se realiza primeramente por teléfono, este no tiene ningún costo, en caso de que se llegará a requerir un servicio de soporte se cotiza en ese momento, los servicios presenciales incluyen gastos de logística.
              Si se requiriere sustituir el equipo lo puedes adquirir con nosotros, manejamos un amplio catálogo de equipo especializado para punto de venta de restaurantes.
            </b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.equipo-2
            variant="light"
            class="text-left"
          >¿Qué incluye el soporte y asistencia técnica?</b-button>
        </b-card-header>
        <b-collapse id="equipo-2" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              <b>Casos de soporte</b>
              <br />
              <br />
              <b>Sistema:</b>
              <br />
              <br />Al comprar o rentar una licencia de ANOVA tienes acceso a la licencia y a nuestro equipo de asistencia puede resolverte dudas relacionadas con el sistema y su funcionamiento.
              <br />
              <br />Equipos:
              <br />
              <br />Los equipos adquiridos en ANOVA tienen una garantía de configuración de 3 meses, cualquier des configuración posterior está sujeta a un costo, para todos los servicios, se requiere hacer una cita remota para hacer un previo diagnóstico por parte del técnico.
              Las configuraciones de equipos que no sean adquiridos en anova no tienen garantía
              <br />
              <br />Capacitaciones:
              <br />
              <br />La capacitación de un asesor especializado tiene un costo, es remota y puede ser aprovechada para capacitar grupos de personas, contacta con un asesor para solicitar más información.
              También puedes contratar una póliza que cubra servicios de configuraciones, mantenimientos preventivos, correctivos y asesorías.
              Nuestros asesores tienen conocimientos sobre el sistema de ANOVA, administración y gestión de restaurantes, implementación de punto de venta, configuración de dispositivos como impresoras térmicas, monitores, routers, access points, entre otros.
              <br />
              <br />
              <b>Horario de atención</b>
              <br />
              <br/>
              <i>(UTC – 06:00 Horario Ciudad de México)</i>
              <br />
              <br />Lunes a Viernes 9:00 AM a 7:00 PM
              Sábado 9:00 AM a 4:00 PM
              <br />
              <br />
              <b>Contacto</b>
              <br />
              <br />Dirección: Calle islote 2413 Rinconada de la victoria, Guadalajara, Jalisco.
              Tel: 33 20 14 89 95
              Email: <b> soporte@anova.mx </b>
              <br />
              <br />
              <b>Consideraciones</b>
               <br />
              <br/>
              <ul class="circle">
                <li>Recomendamos ampliamente contar con una conexión estable a internet, ya que es requerido para los servicios y asistencia que se realizan de forma remota.</li>
                <li>Configuración de equipos o una intervención remota o presencial, que no tengan relación con el software ANOVA tienen un costo dependiendo del tipo de servicio y tiene un tiempo de respuesta.</li>
                <li>Los servicios fuera del horario de atención tienen un cargo adicional.</li>
                <li>Los servicios presenciales tienen un costo adicional.</li>
              </ul>
            </b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>
    </div>
  </div>
</template>

<script>
export default {
  name: "sc6_equipo"
};
</script>