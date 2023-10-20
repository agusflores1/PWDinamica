<?php
include_once __DIR__."/../../includes/configuracion.php";
include_once(STRUCTURE_PATH . "head.php");
?>
<script src="https://www.google.com/recaptcha/api.js?render=6LePBmAoAAAAABb-_4mXbM24-XurBUG3wnF73FLG"></script>

<main class="p-5 text-center bg-light">
        <div class="justify-content-md-center align-items-center">
            <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
                <div class="card-header">
                    <h3>LOGIN</h3>
                </div>
                <div class="card-body">
                    <form class="d-flex flex-column needs-validation" method="post" action="verificaPass.php" id="form3" name="form3">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input class="form-control validate" type="text" name="usuario" id="usuario" placeholder="Username">
                                <div class="invalid-feedback">
                                    Por favor, ingrese un usuario válido.
                                    <br>*El usuario debe tener al menos 4 caracteres.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input class="form-control validate" type="password" name="password" id="password" placeholder="Password">
                                <div class="invalid-feedback">
                                    Por favor, ingrese una clave válida.
                                    <br>*Debe tener al menos 8 caracteres.
                                    <br> *No puede ser igual al nombre de usuario.
                                </div>
                            </div>
                        </div>

                        <!-- Agrega un campo oculto para el token reCAPTCHA V3 -->
                        <input type="hidden" id="recaptchaToken" name="g-recaptcha-response">

                        <!-- Botón para enviar el formulario -->
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
      grecaptcha.ready(function( ){
        grecaptcha.execute('6LePBmAoAAAAABb-_4mXbM24-XurBUG3wnF73FLG', {action: 'formulario'}
        ).then(function (respuestaToken){
          const itoken =document.getElementById('recaptchaToken')
           itoken.value=respuestaToken;
        })
      })
    </script>


<?php include (INCLUDES_PATH."scripts.php"); ?>




