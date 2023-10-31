<?php
//include_once ("../../Estructura/cabecera.php");
//include_once("../../util/funciones.php");
include_once("../../../includes/configuracion.php");
include_once(ROOT_PATH . 'Control/TP5/AbmUsuario.php');
include_once(STRUCTURE_PATH . "head.php");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Cambios usuario:</h3>
            <button class="btn btn-light mx-2 ml-auto" type="button" name="volver" id="volver" onclick="window.location.href = '../listarUsuarios.php'">Volver</button>
   </div>
        <div class="card-body">
            <form class="d-flex flex-column needs-validation" method="post" action="../accion/actualizarUsuario.php" id="form" name="form">

<?php
    $datos = data_submitted();
         if ($datos) {
            $encontrado = false;
            $usuario = new AbmUsuario();
            $objEncontrado = $usuario->buscarID($datos);
            if ($objEncontrado <> NULL) {
?>

<div class="row">
    <div class="col-md-4">
        <label class="form-label">Usuario:</label>
        <input type="text" name="usnombre" id="usnombre" class="form-control validate" maxlength="10"
                value="<?php echo $objEncontrado->getUsNombre(); ?>">
        <div class="invalid-feedback">
            Por favor, ingrese caracteres válidos.
        </div>
    </div>
    <div class="col-md-4">
        <label class="form-label">Password:</label>
        <input type="text" name="uspass" id="uspass" class="form-control validate" maxlength="30"
                value="<?php echo $objEncontrado->getUsPass(); ?>">
        <div class="invalid-feedback">
            Por favor, ingrese caracteres válidos.
        </div>
    </div>
    <div class="col-md-3">
        <label class="form-label">MAIL:</label>
        <input type="text" name="usmail" id="usmail" class="form-control validate" 
               value="<?php echo $objEncontrado->getUsMail(); ?>">
        <div class="invalid-feedback">
            Por favor, ingrese un mail válido.
        </div>
    </div>
<input type="hidden" name="idusuario" value="<?php echo $objEncontrado->getIdUsuario(); ?>">


</div>
<div class="col-md-7 mt-3 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary mx-2">Actualizar</button>
    <button class="btn btn-danger mx-2" type="reset" name="reset" id="reset">Borrar</button>

</div>



<?php
}}
                ?>
            </form>
        </div>
    </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>
