

<?php
    include_once ("../Estructura/cabecera.php");
    include_once ('../../Control/ControlAuto.php');
    include_once ('../../Control/ControlPersona.php');
    include_once '../../configuracion.php';
  //  include_once("../../util/funciones.php");
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4" style="margin-top: 10px;">
    <div class="card w-50 mb-4">
    <div class="card-body">
      <h5 class="card-title">Datos:</h5>
        <?php
        $datos = data_submitted();
        $persona = new ControlPersona();
        $personaModificada = $persona->modificarPersona($datos);
        echo $personaModificada;
        ?>
        <div class="d-flex justify-content-end align-items-end mt-4 pr-3 pb-3">
            <a href="buscarPersona.php" class="btn btn-primary">Volver</a>
        </div>
    </div>
  </div>
</main>
    <?php
      include ("../Estructura/pie.php");
    ?>

</body>
</html>
