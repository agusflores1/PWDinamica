<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH . 'Control/TP2/FormularioLogin.php');

# Aquí pon la clave secreta que obtuviste en la página de developers de Google
define("CLAVE_SECRETA", "6LfvL2AoAAAAAN8fZt2hRdSfO2Eat_iLduvfW7rM");

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

                ///////////////////////////////////////
                //Verifico
                # Comprobamos si enviaron el dato
                if (isset($datos["g-recaptcha-response"]) && !empty($datos["g-recaptcha-response"])) {
                    # Antes de comprobar usuario y contraseña, vemos si resolvieron el captcha
                    $token = $datos["g-recaptcha-response"];
                    $verificado = $objDatos->verificarToken($token, CLAVE_SECRETA);

                    if ($verificado) {
                        /** 
                         * Llegados a este punto podemos confirmar que el usuario
                         * no es un robot. Aquí debes hacer lo que se deba hacer, es decir,
                         * comprobar las credenciales, darle acceso, etcétera, pues
                         * ya ha pasado el captcha
                         */
                        $verificacion = $objDatos->verificarPass($datos, $usuarios);
                        echo '<div class="alert alert-dark" role="alert">' . $verificacion . ' </div>';
                    } else {
                        echo("Lo siento, parece que eres un robot. Realiza nuevamente el captcha.");
                    }
                } else {
                    echo("Lo siento, parece que eres un robot.  Realiza nuevamente el captcha.");
                }
                ?>
                <br><a href="index.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>

