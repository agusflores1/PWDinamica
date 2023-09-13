
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
      <h5 class="card-title">Resultado:</h5>
      <?php
      $datos=data_submitted();
      $persona=new ControlAuto();
      $datosAuto=$persona->agregarAuto($datos);
      if($datosAuto===0)
      {echo "No se encontró un dueño con ese DNI. <br> 
        <div class='d-flex justify-content-end mt-4'> 
        <a href='../ej6/index.php' class='btn btn-primary float-end'>Registrarse Aquí</a> 
        <a href='../ej7/index.php' class='btn btn-secundary float-end'>Volver</a>
         </div> <br>";
      }
      else echo $datosAuto;
        ?>

    </div>
  </div>
</main>
    <?php
      include ("../Estructura/pie.php");
    ?>

</body>
</html>
