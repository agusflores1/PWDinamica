
<?php
    include_once ("../Estructura/cabecera.php");
    include_once ('../../Control/control_2.php');
    include_once("../../utiles/funciones.php");
    ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
<div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Resultado:</h5>
    <?php
    /** USUARIOS CARGADOS */
    $usuarios = array(
    array('usuario' => 'Usuario', 'clave' => '12345678A',
        'usuario' => 'Usuario1', 'clave' => '87654321A')
        //  agregar más usuarios aquí
    );
    $datos=data_submitted();
    $objDatos = new control_2();
    $verificacion = $objDatos->verificarPass($datos,$usuarios);
    ?>
      <div class="d-flex justify-content-between align-items-center">
        <div class="card-text">
          <?php echo '<div class="alert alert-dark" role="alert">'.$verificacion.'</div>'; '<br>'; ?>
        </div>
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
