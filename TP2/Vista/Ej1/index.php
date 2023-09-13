<?php include_once("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
    <div class="card col-md-6 mx-auto p-3">
        <div class="card-header">
            <h3 class="text-primary">Login:</h3>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column needs-validation" method="post" action="verificaPass.php" onSubmit="return validarPass()" id="form" name="form">
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </span>
                        <input class="form-control validate" type="text" name="usuario" id="usuario" placeholder="Username">
                        <div class="invalid-feedback">
                            Por favor, ingrese su usuario.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg>
                        </span>
                        <input class="form-control validate" type="password" name="clave" id="clave" placeholder="Password">
                        <div class="invalid-feedback">
                            Por favor, ingrese una clave válida.
                            <br>* La contraseña debe tener al menos 8 caracteres.
                            <br> * La contraseña no puede ser igual al nombre de usuario.
                            <br>* La contraseña debe contener al menos una letra y un número.
                        </div>
                    </div>
                </div>

                <div class="d-grid">
                    <input type="submit" class="btn btn-success" value="Login">
                </div>

            </form>
        </div>
    </div>
</main>
<?php include("../Estructura/pie.php"); ?>
