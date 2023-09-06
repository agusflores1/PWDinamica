<link rel="stylesheet" href="../estilos.css">
    <?php
    include_once ("../Estructura/cabecera.php");
    include_once ('../../Control/control_ej1.php');
    include_once("../../utiles/funciones.php");
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Resultado:</h5>
      <?php
      $datos = data_submitted();
      $modelo = new control_ej1();
      $resultado = $modelo->verificarNumero($datos);
      ?>

      <div class="d-flex justify-content-between align-items-center">
        <div class="card-text">El número es: <?php echo $resultado; ?></div>
        <a href="index.php" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>
</main>
    <?php
      include ("../Estructura/pie.php");
    ?>

</body>
</html>
