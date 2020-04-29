<template>
  <div class="container text-center" style="max-width:800px;">
    <p id="tituloe">Preguntas frecuentes</p>
    <h5 class="espacio"></h5>
    <h5 class="card-title text-left" id="tituloa">
      <img src="img/soporte/soporte_iconoinstalacion.png" />
      Instalación de software
    </h5>
    <div role="tablist" class="mb-5 text-left">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button block href="#" class="text-left" v-b-toggle.instalacion-1 variant="light">
            ¿Si ya tengo equipo de punto de venta cómo lo utilizo?
            (Compatibilidad y equipos recomendados de punto de venta)
          </b-button>
        </b-card-header>
        <b-collapse id="instalacion-1" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              Para utilizar ANOVA se requiere por lo menos una computadora con
              Windows 7 en adelante y es recomendable utilizar por lo menos una
              impresora térmica para los tickets de venta, comunícate con nosotros
              y un experto te asesorará sobre cómo configurar tu equipo, su compatibilidad
              e implementación. Contáctanos a soporte@anova.mx o directamente a nuestras oficinas
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
            class="text-left"
            v-b-toggle.instalacion-2
            variant="light"
          >¿Cómo descargo e instalo el sistema?</b-button>
        </b-card-header>
        <b-collapse id="instalacion-2" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              <ul class="numeracion">
                <li>
                  Registrate
                  <a href="http://www.anova.mx/pruebagratiss">www.anova.mx/pruebagratis</a>
                </li>
                <li>Recibe un correo con el link de descarga</li>
                <li>Abre el link y descarga el instalador</li>
                <li>Ejecuta el instalador recién descargado</li>
                <li>Completa el asistente de instalación</li>
                <li>Abre el acceso directo de ‘ANOVA’ en tu escritorio</li>
                <li>Selecciona la opción de ‘Cliente y servidor’ en el asistente de configuración</li>
                <li>Completa el asistente de configuración (puede tardar unos minutos)</li>
                <li>Abre nuevamente el acceso directo de ‘ANOVA’ en tu escritorio</li>
                <li>Llena los datos de configuración del ticket (Es muy importante llenarlos correctamente desde el inicio)</li>
                <li>Presiona el botón de ‘Configurar ANOVA’</li>
                <li>Comienza a utilizar ANOVA</li>
              </ul>
            </b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            class="text-left"
            v-b-toggle.instalacion-3
            variant="light"
          >Me aparece un error al instalar el software ¿Qué puedo hacer?</b-button>
        </b-card-header>
        <b-collapse id="instalacion-3" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              <b>Opción 1:</b>
              <br />
              <br />
             
                  Verifica si tu sistema operativo es compatible, ANOVA puede instalarse en Windows 7 (se requiere instalar .NET framework 4.5 en adelante), Windows 8, Windows 8.1 y Windows 10.
                  Link descarga .NET framework 4.5
                  <a
                    href="https://www.microsoft.com/es-mx/download/confirmation.aspx?id=30653"
                  >https://www.microsoft.com/es-mx/download/confirmation.aspx?id=30653</a>
             
              <br />
              <br />
              <b>Opción 2:</b>
              <br />
              <br />Verifica que descargaste el instalador adecuado para tu sistema operativo, ANOVA viene en versión de 32 y 64 bits, por lo que debemos verificar cuál de los dos tiene tu computadora para instalar el correcto.
              <ul class="numeracion">
                <li>Abre ‘Panel de control\Sistema y seguridad\Sistema’ (Puedes llegar más rápido con la combinación de teclas ‘Win + Pausa’</li>
                <li>En la sección de Sistema verifica de que tipo es, Puede haber 2 opciones únicamente Sistema operativo de 32 bits o de 64 bits.</li>
                <li>Descarga la versión adecuada de ANOVA a tu sistema operativo</li>
                <li>Instala ANOVA</li>
              </ul>
              <br />
              <br />
              <b>Opción 3:</b>
              <br />
              <br />
              <ul class="numeracion">
                <li>Vuelve a descargar el instalador de ANOVA desde el link Si no está el acceso directo de ANOVA en tu escritorio ve directo al paso 5</li>
                <li>Abre ‘Panel de control\Programas\Programas y características’</li>
                <li>Selecciona en la lista ‘ANOVA – Punto de venta inteligente’</li>
                <li>Desinstalalo</li>
                <li>Reinicia tu computadora</li>
                <li>Ejecuta el instalador de ANOVA nuevamente</li>
                <li>Completa el asistente de instalación y configuración</li>
                <li>Comienza a utilizar ANOVA</li>
              </ul>
              <br />
              <br />
              <b>Opción 4:</b>
              <br />
              <br />
             Contáctanos y un experto te ayudará a resolver tu problema.
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
            class="text-left"
            v-b-toggle.instalacion-4
            variant="light"
          >Ya que compre el software ¿qué sigue? (Capacitación)</b-button>
        </b-card-header>
        <b-collapse id="instalacion-4" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              Una vez pagada la licencia, comienza a disfrutar los beneficios del software, también puedes comunicarte con un asesor de ANOVA y contratar una sesión de capacitación (en caso de ser requerida), en esta sesión podemos resolver todo tipo de dudas referentes al sistema, su implementación y configuración.
              Posterior a eso tendrás un agente de cuenta al que podrás reportarle cuestiones técnicas y que juntos puedan resolver las dudas.
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
            class="text-left"
            v-b-toggle.instalacion-5
            variant="light"
          >¿Cuál es la contraseña para entrar por primera vez a ANOVA?</b-button>
        </b-card-header>
        <b-collapse id="instalacion-5" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              La contraseña de administrador por default es 123.
              Esta se puede cambiar en el panel de administración en la sección usuarios.
              El usuario administrador tiene acceso total al sistema por lo que recomendamos cambiar la contraseña.
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
            class="text-left"
            v-b-toggle.instalacion-6
            variant="light"
          >Si ya cargué mis datos en una computadora ¿cómo puedo cambiarlos a otra?</b-button>
        </b-card-header>
        <b-collapse id="instalacion-6" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>Contáctanos y un asesor te ayudará a hacer el cambio.</b-card-text>
            <b-card-text></b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>
    </div>
  </div>
</template>

<script>
export default {
  name: "sc2_instalacion"
};
</script>