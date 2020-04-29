<template>
  <div class="container text-center" style="max-width:800px;">
    <h5 class="card-title text-left" id="tituloa">
      <img src="img/soporte/soporte_iconoactualizaciones.png" />
      Actualizaciones del software
    </h5>
    <div role="tablist" class="mb-5 text-left">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.actualizacion-1
            variant="light"
            class="text-left"
          >¿Cómo renuevo mi licencia y cómo sé si ya está activa?</b-button>
        </b-card-header>
        <b-collapse id="actualizacion-1" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              <b>Sigue los siguientes pasos</b>
              <br />
              <br />
              <ul class="numeracion">
                <li>Abre la página www.anova.mx/precio</li>
                <li>Selecciona el plan que desees adquirir y presiona el botón de rentar o comprar</li>
                <li>Registra tus datos en la página de compra o selecciona la opción de pago por Paypal</li>
                <li>Realiza el pago de la licencia o contacta con un asesor para adquirir un plan. </li>
                <li>Descarga el instalador de ANOVA</li>
                <li>Instala y configura ANOVA en tu computadora</li>
                <li>Ejecuta el acceso directo de ANOVA en tu escritorio</li>
                <li>Inicia sesión con la clave de administrador</li>
                <li>Abre el panel de Administración de ANOVA</li>
                <li>Presiona el botón verde de la esquina superior derecha que dice ‘Configuración’</li>
                <li>Selecciona la opción de ‘Mis licencias’</li>
                <li>Aquí podrás verificar si tu licencia ya se encuentra activa y cuando expira</li>
              </ul>
              <br />
              *El tiempo de activación de licencia puede tardar un par de horas
            </b-card-text>
            <b-card-text></b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>


 <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.actualizacion-2
            variant="light"
            class="text-left"
          >¿Cómo funcionan las actualizaciones y con qué frecuencia se hacen?</b-button>
        </b-card-header>
        <b-collapse id="actualizacion-2" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
         En ANOVA trabajamos arduamente en tener un software innovador y que cumpla con tus necesidades, por lo que estamos constantemente liberando nuevas actualizaciones del sistema, cada que haya una nueva versión te aparecerá una ventana que te preguntará si quieres actualizarte, al ponerle que si automáticamente se actualiza tu sistema, recomendamos ampliamente siempre tener la última versión de ANOVA ya que con cada actualización se mejoran muchas funciones.
            </b-card-text>
            <b-card-text></b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>
    </div>
  </div>
</template>

<script>
export default {
  name: "sc5_actualizacion"
};
</script>