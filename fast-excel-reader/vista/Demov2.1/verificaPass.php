<?php
include_once __DIR__."/../../includes/configuracion.php";
include_once(STRUCTURE_PATH . "head.php");
require_once __DIR__.'/../../vendor/google/recaptcha/src/autoload.php';

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

                ////////////////////////////////////Creamos un objeto de la clase recaptcha/////////////////////////////////////////////////
                $secretKey = "6LfvL2AoAAAAAN8fZt2hRdSfO2Eat_iLduvfW7rM"; // CLAVE SECRETA: Se define en administracion en Google
                $recaptcha = new \ReCaptcha\ReCaptcha($secretKey);

                if ($datos) {
                   
                    // Verifica el reCAPTCHA
                    if (isset($datos['g-recaptcha-response'])) {
                        $response = $datos['g-recaptcha-response']; //resultado si resolvieron el captcha
                        $remoteIp = $_SERVER['REMOTE_ADDR']; // la dirección IP del usuario
                
                        $recaptchaResponse = $recaptcha->verify($response, $remoteIp); //esta función se utiliza para verificar la respuesta CAPTCHA proporcionada por un usuario y 
                                                                                       //realizar validaciones adicionales según las configuraciones opcionales.
                                                                                       // Si se encuentran errores de validación, se devuelve una respuesta con los errores.
                      
                
                        if ($recaptchaResponse->isSuccess()) {
                            // El reCAPTCHA se pasó con éxito, puedes continuar con la autenticación del usuario.
                            $verificacion = $objDatos->verificarPass($datos, $usuarios);
                            echo '<div class="alert alert-dark" role="alert">' . $verificacion . ' </div>';
                            
                           
                        } else {
                            // El reCAPTCHA no se pasó, maneja el error adecuadamente.
                            $errors = $recaptchaResponse->getErrorCodes();
                            // Maneja los errores, por ejemplo, muestra un mensaje al usuario.
                            foreach ($errors as $error) {
                                echo "Error de reCAPTCHA: $error<br>";
                            }
                        }
                    } else {
                        // El reCAPTCHA no se proporcionó, maneja el error adecuadamente.
                        echo "Por favor, completa el reCAPTCHA.";
                    }
                }
                ?>
                <br><a href="index.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>

