<template>
  <div class="container text-center" style="max-width:800px;">
    <h5 class="card-title text-left" id="tituloa">
      <img src="img/soporte/soporte_iconoadministracion.png" />
      Administración del software
    </h5>
    <div role="tablist" class="mb-5 text-left">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            class="text-left"
            v-b-toggle.administracion-1
            variant="light"
          >Si olvidé mi contraseña de administrador ¿qué puedo hacer?</b-button>
        </b-card-header>
        <b-collapse id="administracion-1" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>No te preocupes, a todos nos pasa, contáctanos y 
              con gusto te ayudaremos a reestablecer tu contraseña.</b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            class="text-left"
            v-b-toggle.administracion-2
            variant="light"
          >Si tengo 2 o más puntos de venta ¿cómo los sincronizo con ANOVA?</b-button>
        </b-card-header>
        <b-collapse id="administracion-2" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              Para simplificar la explicación utilizaremos los siguientes términos:
              <br />
              <i>‘Servidor’</i> : Computadora principal la cual contiene la
              base de datos a la que se conectarán las otras computadoras, tablets o puntos de venta.
              <br />
              <i>‘Cliente’</i> : Computadora, tablet o punto de venta adicional que se conecta y sincroniza al ‘Servidor’ para poder funcionar
              <br />
               <br />
              <b>Sigue los siguientes pasos</b>
               <br />
                <br />
              <ul class="numeracion">
                <li>Sigue todos los pasos descritos en la respuesta a ‘¿Cómo descargo e instalo el sistema?’ (En la parte superior de esta sección de preguntas y respuestas) para instalar el sistema en el ‘Servidor’</li>
                <li>Descarga o transfiere el instalador de ANOVA al ‘Cliente’</li>
                <li>Ejecuta el instalador en el ‘Cliente’</li>
                <li>Completa el asistente de instalación</li>
                <li>Abre el acceso directo de ANOVA en tu escritorio</li>
                <li>Selecciona la opción de ‘Solo Cliente’ en el asistente de configuración</li>
                <li>
                  Ingresa la IP o el nombre del ‘Servidor’
                  Para conocer el nombre del servidor:
                  <br />Abre ‘Panel de control\Sistema y seguridad\Sistema’
                  (Puedes llegar más rápido con la combinación de teclas Win + Pausa’)
                  El nombre del servidor esta después de la etiqueta ‘Nombre completo de equipo’
                  <br />Para conocer la IP del servidor:
                  <br />Presiona la combinación de teclas ‘Win + r’ esto te abrirá una ventana en la esquina inferior izquierda, escribe ‘CMD’ y dale enter, esto te abrirá una ventana con fondo negro.
                  Puedes llegar a esta ventana también presionando la tecla ‘Windows’ y posteriormente escribiendo ‘CMD’ y presionando enter.
                  <br />Escribe en la pantalla negra ‘IPCONFIG’ (sin las comillas) y dale enter.
                  Si estas conectado por wifi busca el texto que diga ‘Adaptador de LAN inalámbrica Wi-Fi’, si estas conectado por cable busca donde diga ‘Adaptador de Ethernet Ethernet’ y debajo de ese texto encuentra ‘Dirección IPV4’ el número que sale a la derecha es la IP que estamos buscando, debe aparecer con el siguiente formato xxx.xxx.xxx.xxx
                </li>
                <li>Ingresa el puerto que se utilizará, por default es el 3306, en caso de que no funcione prueba con el 3307 o 3308.</li>
                <li>Dale clic al botón ‘Probar conexión’, debe salir un mensaje que dice ‘conexión satisfactoria’ en caso contrario hay que revisar que los dos equipos estén conectados en una red y estén debidamente configurados.</li>
                <li>Dale clic al botón ‘Siguiente’</li>
                <li>Completa el asistente de configuración</li>
                <li>Abre el acceso directo de ANOVA nuevamente y empieza a utilizar.</li>
              </ul>
              <b>Consideraciones</b>
               <br />
                <br />
              <ul class="circle">
                <li>Se requiere por lo menos un servidor que cumpla los requerimientos para poder conectar otros puntos de venta, para más información sobre compatibilidad y requerimientos del sistema por favor contacta a un asesor de ANOVA.</li>
                <li>En caso de que se requiera comprobar si los dos equipos están conectados en la misma red puedes contactar a un experto de ANOVA para que te asesore.</li>
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
            v-b-toggle.administracion-3
            variant="light"
          >Si olvidé mi contraseña de administrador ¿qué puedo hacer?</b-button>
        </b-card-header>
        <b-collapse id="administracion-3" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              No te preocupes, a todos nos pasa, contáctanos y 
              con gusto te ayudaremos a reestablecer tu contraseña.
        
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
            v-b-toggle.administracion-4
            variant="light"
          >¿Dónde puedo modificar los datos de mi ticket de venta?</b-button>
        </b-card-header>
        <b-collapse id="administracion-4" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text> 
              La primera vez que ejecutas ANOVA en tu computadora te preguntará por los datos de tu ticket, es muy importante que los llenes correctamente, una vez que se registraron esos datos los puedes modificar desde el panel de administración, en la esquina superior derecha hay un botón que dice ‘Configuración’ al darle clic abre una ventana con varias opciones, selecciona la de ‘Datos de la empresa’ y en la ventana que abre podrás configurar y cambiar los datos de tu ticket de venta.
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
            v-b-toggle.administracion-5
            variant="light"
          >¿Cómo puedo ver todas sus ventas en un solo lugar?</b-button>
        </b-card-header>
        <b-collapse id="administracion-5" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
          Entra al módulo de reportes y la ventana principal es un dashboard con la información más importante de tu restaurante, gastos, ventas, descuentos, mesas abiertas etc. 
Si requieres hacer una consulta más avanzada de uno o más restaurantes tenemos una herramienta más amplia que se adapta a tus necesidades, contacta con un asesor.
               </b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>

      








    </div>
  </div>
</template>

<script>
export default {
  name: "sc3_administracion"
};
</script>