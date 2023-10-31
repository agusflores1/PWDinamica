


<?php
   // include_once ("../../Estructura/cabecera.php");
    //  include_once("../../util/funciones.php");
    include_once ("../../../includes/configuracion.php");
    include_once (STRUCTURE_PATH."head.php");
    $datos = data_submitted();
    $usuario = new AbmUsuario();
    $usuarioModificado = $usuario->modificacion($datos);
        if ($usuarioModificado) { 
?>  

<main class="p-5 text-center bg-light">
    <div class="justify-content-md-center align-items-center ">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="card-header">
                <h3>Actualizado!</h3>
            </div>
            <div class="card-body">
           <?php
            echo '<div class="alert alert-dark" role="alert">' .'Su usuario ha sido actualizado!'. ' </div>';
            ?>
            <br><a href="../listarUsuarios.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
    <?php
                } else {
                    header("Location: ../listarUsuarios.php");
                }
                ?>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>

