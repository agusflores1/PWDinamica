<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH . 'Control/TP2/FormularioLogin.php');

# Aquí pon la clave secreta que obtuviste en la página de developers de Google
define("CLAVE_SECRETA", "6LePBmAoAAAAAHfZWp_zV6lsM-orqkxsCbwPpDJv");

?>
<main class="p-5 text-center bg-light">
    <div class="justify-content-md-center align-items-center ">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="card-header">
                <h3>Resultado</h3>
            </div>
            <div class="card-body">
                <?php
                /** USUARIOS CARGADOS */
                $usuarios = array(
                    array('usuario' => 'Usuario', 'password' => '12345678A'),
                    array('usuario' => 'Usuario1', 'password' => '87654321A')
                    //  agregar más usuarios aquí
                );
                $datos = data_submitted();
                $objDatos = new FormularioLogin();
                        $verificacion = $objDatos->verificarPass($datos, $usuarios);
                        echo '<div class="alert alert-dark" role="alert">' . $verificacion . ' </div>';
                ?>
                <br><a href="index.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>

