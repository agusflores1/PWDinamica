<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<main class="p-5 text-center bg-light">
    <div class="justify-content-md-center align-items-center">
        <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="card-header">
                <h3>LOGIN</h3>
            </div>
            <div class="card-body">
                <form class="d-flex flex-column needs-validation" method="post" action="verificaPass.php" id="formBienvenido" name="formBienvenido">
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input class="form-control validate" type="text" name="usuario" id="usuario"
                                placeholder="Username">
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
                            <input class="form-control validate" type="password" name="password" id="password"
                                placeholder="Password">
                            <div class="invalid-feedback">
                                Por favor, ingrese una clave válida.
                                <br>*Debe tener al menos 8 caracteres.
                                <br> *No puede ser igual al nombre de usuario.
                            </div>
                        </div>
                    </div>

                    <!-- reCAPTCHA invisible -->
                    <div class="g-recaptcha" data-sitekey="6LePBmAoAAAAABb-_4mXbM24-XurBUG3wnF73FLG" data-callback="onSubmit" data-size="invisible">
</div>
                    <!-- Botón para iniciar sesión con la llamada a onLoginButtonClick() -->
                    <button type="button" class="btn btn-primary" onclick="onLoginButtonClick();">Login</button>

                </form>
            </div>
        </div>
    </div>
</main>

<?php include(STRUCTURE_PATH . "footer.php"); ?>
