<template>
  <div class="container text-center" style="max-width:800px;">
    <h5 class="card-title text-left" id="tituloa">
      <img src="img/soporte/soporte_iconooperacion.png" />
      Operación del software
    </h5>
    <div role="tablist" class="mb-5 text-left">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button
            block
            href="#"
            v-b-toggle.operacion-1
            variant="light"
            class="text-left"
          >Me gustaría reiniciar todas las ventas y operaciones ¿cómo le hago?</b-button>
        </b-card-header>
        <b-collapse id="operacion-1" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              En el panel de administración de ANOVA en la esquina superior derecha hay un botón que dice
              <i>‘Reiniciar’</i>al darle clic
              <br />
              <br />
              <b>Se borran los siguientes datos:</b>
              <br />
              <br />
              <ul class="circle">
                <li>Ventas</li>
                <li>Compras</li>
                <li>Entradas y salidas de efectivo</li>
                <li>Descuentos</li>
                <li>Motivos de descuento</li>
                <li>Cancelaciones</li>
                <li>Motivos de cancelación</li>
                <li>Conteos físicos de inventarios</li>
                <li>Mermas</li>
                <li>Cortes de caja</li>
              </ul>
              <b>Los siguientes datos no se borran:</b>
              <br />
              <br />
              <ul class="circle">
                <li>Ingredientes</li>
                <li>Presentaciones</li>
                <li>Productos</li>
                <li>Modificadores</li>
                <li>Promociones</li>
                <li>Usuarios</li>
                <li>Perfiles</li>
              </ul>

              <b>Consideraciones</b>
              <br />
              <br />
              <ul class="circle">
                <li>Únicamente el administrador tiene acceso a esta función</li>
                <li>Se recomienda para hacer pruebas iniciales del sistema en etapa de capacitación y reiniciar las operaciones ya en etapa de producción.</li>
                <li>Cualquier duda contacta un asesor técnico, es recomendable, solicitar la supervisión de tu asesor.</li>
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
            v-b-toggle.operacion-2
            variant="light"
            class="text-left"
          >¿Por qué no se están imprimiendo mis productos?</b-button>
        </b-card-header>
        <b-collapse id="operacion-2" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <b-card-text>
              <b>Opcion 1:</b>
              <br />
              <br />Los productos no están asociados a una impresora en la configuración de ANOVA
              <br />
              <br />
              <b>Solución: Asociar los productos a su respectiva zona de impresión</b>
              <br />
              <br />Pasos:
              <ul class="circle">
                <li>Ingresa al panel administrativo de ANOVA</li>
                <li>
                  Ingresa al menú de Z. Impresión (hasta abajo)
                  <br />
                  <br />En caso de que no tengas ninguna impresora registrada sigue los pasos del manual de ANOVA para agregar impresoras
                  www.anova.mx/soporte/impresoras
                </li>
                <li>En la lista que aparece selecciona la impresora donde saldrán los productos</li>
                <li>Dale clic al botón ‘Editar’ en la esquina superior derecha</li>
                <li>Verifica que este seleccionado el recuadro de ‘Producción’</li>
                <li>Dale clic en siguiente</li>
                <li>En el panel izquierdo selecciona los productos que deseas que se impriman en esta impresora y dale clic al botón de flecha derecha para que se pasen al panel derecho</li>
                <li>Dale clic en el botón ‘Guardar y cerrar’</li>       
              </ul>

              <b>Opcion 2:</b>
              <br />
              <br />
              Las impresoras no están instaladas/configuradas.
            </b-card-text>
          </b-card-body>
        </b-collapse>
      </b-card>
    </div>
  </div>
</template>

<script>
export default {
  name: "sc4_operacion"
};
</script>