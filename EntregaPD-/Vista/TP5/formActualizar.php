<?php
    //include_once ("../../Estructura/cabecera.php");
    //  include_once("../../util/funciones.php");
    include_once ("../../includes/configuracion.php");
    include_once (ROOT_PATH.'Control/TP5/AbmUsuario.php');
    include_once (STRUCTURE_PATH."head.php");
?>
// placeolder="<?php echo $usuario->getUsNombre(); ?>"


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Actualizar cuenta:</h3>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column  needs-validation" method="post" action="../actualizarLogin.php" id="form" name="form">
               
            <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Usuario:</label>
                        <input type="text" name="usuarioActualizado" id="usuarioActualizado" class="form-control validate" maxlength="10" required>
                        <div class="invalid-feedback">
                            Por favor, ingrese caracteres validos.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Password:</label>
                        <input type="text" name="passwordActualizado" id="passwordActualizado" class="form-control validate" maxlength="30" required>
                        <div class="invalid-feedback">
                            Por favor, ingrese caracteres validos.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">MAIL:</label>
                        <input type="text" name="mailActualizado" id="DNI" class="form-control validate" required>
                        <div class="invalid-feedback">
                            Por favor, ingrese un mail valido.
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mt-3 d-flex justify-content-end">
                    <button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Actualizar</button>
                    <button class="btn btn-danger" type="reset" name="reset" id="reset">Borrar</button>
                    <button class="btn btn-light" type="botton" name="volver" id="volver" href="listarUsuarios.php">Volver</button>
                </div>
        </div>
        </form>
    </div>
    </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>