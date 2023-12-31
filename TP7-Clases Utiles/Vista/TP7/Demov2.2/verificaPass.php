<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");

require_once '../../../Control/TP2/ReCaptcha/src/autoload.php';

# Tu clave secreta de reCAPTCHA
define("CLAVE_SECRETA", "6LePBmAoAAAAAHfZWp_zV6lsM-orqkxsCbwPpDJv");

?>

<main class="p-5 text-center bg-light">
    <div class="justify-content-md-center align-items-center">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="card-header">
                <h3>Resultado</h3>
            </div>
            <div class="card-body">
                <?php
                $datos = data_submitted();
                $objDatos = new FormularioLogin();

                /** USUARIOS CARGADOS */
                $usuarios = array(
                    array('usuario' => 'Usuario', 'password' => '12345678A'),
                    array('usuario' => 'Usuario1', 'password' => '87654321A')
                    // Agrega más usuarios aquí
                );

                if (isset($_POST['g-recaptcha-response'])) {
                    $recaptcha = new \ReCaptcha\ReCaptcha(CLAVE_SECRETA);
                    $resp = $recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

                    if ($resp->isSuccess()) {
                        // El reCAPTCHA se pasó con éxito, puedes continuar con el procesamiento del formulario
                        $verificacion = $objDatos->verificarPass($datos, $usuarios);
                        echo '<div class="alert alert-dark" role="alert">' . $verificacion . ' </div>';
                    } else {
                        // Maneja el error de reCAPTCHA si no se pasa
                        $errors = $resp->getErrorCodes();
                        // Muestra los errores, por ejemplo, muestra un mensaje al usuario.
                        foreach ($errors as $error) {
                            echo "Error de reCAPTCHA: $error<br>";
                        }
                    }
                } else {
                    // El reCAPTCHA no se proporcionó, maneja el error adecuadamente.
                    echo "Por favor, completa el reCAPTCHA.";
                }
                ?>
                <br><a href="index.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>

<?php include(STRUCTURE_PATH . "footer.php"); ?>
