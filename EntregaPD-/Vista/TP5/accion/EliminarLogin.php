
<?php
    //include_once ("../../Estructura/cabecera.php");
    //  include_once("../../util/funciones.php");
    include_once ("../../../includes/configuracion.php");
    include_once (ROOT_PATH.'Control/TP5/AbmUsuario.php');
    include_once (STRUCTURE_PATH."head.php");


  $datos=data_submitted();
  if ($datos) {
   // print_r( $datos);
    $usuarioID = $datos['idusuario'];
    $objUsuario=new AbmUsuario();
    $arregloEncontrado= $objUsuario->baja($datos);
    if(!$arregloEncontrado)
    { echo "ID de usuario no válido."; }
}
?>
<main class="p-5 text-center bg-light">
    <div class="justify-content-md-center align-items-center ">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="card-header">
                <h3>Se elimino el usuario!</h3>
            </div>
            <div class="card-body">
           <?php
            echo '<div class="alert alert-dark" role="alert">' .'Hasta Pronto Usuario Nro '.$usuarioID. ' !</div>';
            ?>
            <br><a href="../listarUsuarios.php" class="btn btn-primary">Volver</a>
           

            </div>
        </div>
    </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>




